<?php
namespace Tests\Unit;

use Tests\TestCase;
use GuzzleHttp\Client;
use App\User;

/**
 * 個人情報（アカウント）周りのテストクラス
 *
 * @since 2018/5/9
 * @author takuya
 *
 */
class UserTest extends TestCase
{

    public function testユーザーの登録(){
        $response = $this->post('http://192.168.56.103/api/v1/user', [
            'telephone_number' => '08012345678',
            'name' => 'test',
            'password' => 'secret',
        ]);

        $response->assertJson(['id' => true]);
        $obj = json_decode($response->original);
        $user = User::find($obj->id);
        $user->delete();
    }


    public function testパスワードによるトークン発行()
    {
        $userresponse = $this->post('http://192.168.56.103/api/v1/user', [
            'telephone_number' => '08012345678',
            'name' => 'test',
            'password' => 'secret',
        ]);

        $http = new Client();

        $response = $http->post('http://192.168.56.103/oauth/token', [
            'form_params' => [
                'grant_type' => 'password',
                'client_id' => 1,
                'client_secret' => "OqFe1XvBzIaKSkGZHIE7QiCwTySm4cYPCb87l6Ih",
                'username' => 'test',
                'password' => 'secret',
                'scope' => ''
            ]
        ]);

        $this->assertTrue($response->getStatusCode() == 200);

        $obj = json_decode((string) $response->getBody(), true);

        $this->assertEquals("Bearer",$obj["token_type"]);

        $obj = json_decode($userresponse->original);
        $user = User::find($obj->id);
        $user->delete();
    }

    /**
     *
     */
    public function testTwitter認証(){

    }
}
