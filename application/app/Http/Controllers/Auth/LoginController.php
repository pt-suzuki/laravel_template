<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Abraham\TwitterOAuth\TwitterOAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function twitter()
    {
        $twitter = new TwitterOAuth(
            config('twitter.consumer_key'),
            config('twitter.consumer_secret')
        );
        # 認証用のrequest_tokenを取得
        # このとき認証後、遷移する画面のURLを渡す
        $token = $twitter->oauth('oauth/request_token', array(
            'oauth_callback' => config('twitter.oauth_callback')
        ));

        # 認証画面で認証を行うためSessionに入れる
        session(array(
            'oauth_token' => $token['oauth_token'],
            'oauth_token_secret' => $token['oauth_token_secret'],
        ));

        # 認証画面へ移動させる
        ## 毎回認証をさせたい場合： 'oauth/authorize'
        ## 再認証が不要な場合： 'oauth/authenticate'
        $url = $twitter->url('oauth/authenticate', array(
            'oauth_token' => $token['oauth_token']
        ));

        return redirect($url);
    }

    public function twitterCallback(Request $request)
    {
        $oauth_token = session('oauth_token');
        $oauth_token_secret = session('oauth_token_secret');

        # request_tokenが不正な値だった場合エラー
        if ($request->has('oauth_token') && $oauth_token !== $request->oauth_token) {
            return Redirect::to('/login');
        }

        # request_tokenからaccess_tokenを取得
        $twitter = new TwitterOAuth(
            $oauth_token,
            $oauth_token_secret
        );
        $token = $twitter->oauth('oauth/access_token', array(
            'oauth_verifier' => $request->oauth_verifier,
            'oauth_token' => $request->oauth_token,
        ));

        # access_tokenを用いればユーザー情報へアクセスできるため、それを用いてTwitterOAuthをinstance化
        $twitter_user = new TwitterOAuth(
            $token['oauth_token'],
            $token['oauth_token_secret']
        );

        # 本来はアカウント有効状態を確認するためのものですが、プロフィール取得にも使用可能
        $twitter_user_info = $twitter_user->get('account/verify_credentials');
        dd($twitter_user_info);
    }

    public function getTimeline(Request $request)
    {
        # userがある前提です
        $user = User::find(Auth::user()->user_id);

        $twitter = new TwitterOAuth(
            config('twitter.consumer_key'),
            config('twitter.consumer_secret')
        );
        # 指定したユーザーのタイムラインを取得
        $timeline = $twitter->get('statuses/user_timeline', array(
            'user_id' => Auth::User()->twitter_id,
        ));
        dd($ret);
    }

    public function getFollowList(Request $request)
    {
        # userがある前提です
        $user = User::find(Auth::user()->user_id);

        $twitter = new TwitterOAuth(
            config('twitter.consumer_key'),
            config('twitter.consumer_secret')
        );
        # 指定したユーザーのタイムラインを取得
        $timeline = $twitter->get('friends/list', array(
            'user_id' => Auth::User()->twitter_id,
        ));
        dd($ret);
    }
}
