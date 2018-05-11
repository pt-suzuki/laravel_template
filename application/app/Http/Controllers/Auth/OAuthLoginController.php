<?php
namespace App\Http\Controllers\Auth;

use Socialite;
use App\Http\Controllers\Controller;
use Auth;
use Request;
use GuzzleHttp\Client;
use App\Utils\UrlTextCreation;
use App\Models\LinkedSocialAccount;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DB;
use Laravel\Passport\Passport;

class OAuthLoginController extends Controller
{
    /**
     * OAuth認証 リクエスト
     */
    public function getAuth()
    {
        $social = basename(parse_url(UrlTextCreation::getUrl(), PHP_URL_PATH));
        return Socialite::driver($social)->redirect();
    }

    /**
     * OAuth認証 コールバック
     */
    public function authCallback()
    {
        $social = basename(parse_url(UrlTextCreation::getUrl(), PHP_URL_PATH));

        // ユーザ属性を取得
        $social_user = Socialite::driver($social)->user();

        try{
            $linkd_account = LinkedSocialAccount::where('provider_id',$social_user->id)->where('provider_name',$social)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            //TODO
            return "out";
        }

        Auth::loginUsingId($linkd_account->user_id, true);

        $query = http_build_query([
            'client_id' => 6,
            'redirect_uri' => UrlTextCreation::getHostUrl() .'/callback',
            'response_type' => 'code',
            'scope' => ''
        ]);

        return redirect(UrlTextCreation::getHostUrl() .'/oauth/authorize?' . $query);
    }

    /**
     * OauthCode認証
     */
    public function authCode(Request $request)
    {
        $result = DB::select("select * from oauth_clients where user_id=" . Auth::id());

        $http = new Client();

        $response = $http->post(UrlTextCreation::getHostUrl() .'/oauth/token', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'client_id' => 6,
                'client_secret' => "BuzqQKodAClTBCC4fiT7Bh8MlnqrFgD2Q61XRJVB",
                'redirect_uri' => UrlTextCreation::getHostUrl() .'/callback',
                'code' => Request::input("code")
            ]
        ]);

        return json_decode((string) $response->getBody(), true);
    }


}