<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],


    /*
    'google' => [
        'client_id' => config('jiny.auth.social.google.clinet_id'),
        'client_secret' => config('jiny.auth.social.google.client_secret'),
        'redirect' => "http://localhost:8000/login/google/callback",
    ],
    */

    /*
    'facebook' => [
        'client_id' => config('jiny.auth.social.facebook.clinet_id'),
        'client_secret' => config('jiny.auth.social.facebook.client_secret'),
        'redirect' => "http://localhost:8000/login/facebook/callback",
    ],

    'naver' => [
        'client_id' => config('jiny.auth.social.naver.clinet_id'),
        'client_secret' => config('jiny.auth.social.naver.client_secret'),
        'redirect' => "http://localhost:8000/login/naver/callback",
    ],

    'kakao' => [
        'client_id' => config('jiny.auth.social.kakao.clinet_id'),
        'client_secret' => config('jiny.auth.social.kakao.client_secret'),
        'redirect' => "http://localhost:8000/login/kakao/callback",
    ],
    */

];


