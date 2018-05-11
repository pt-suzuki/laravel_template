<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client as Client;

$guzzle = new Client;

$query = http_build_query([
    'client_id'     => '6',
    'redirect_uri'  => 'http://192.168.56.103/auth/callback/twitter',
    'response_type' => 'code',
    'scope'         => '',
]);

header('Location: http://192.168.56.103/oauth/authorize?' . $query);