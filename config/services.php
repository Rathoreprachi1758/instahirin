<?php
$baseUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/';
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

    'google' => [
//        dd($baseUrl . 'social-google-callback'),
        'client_id' => '969738769103-5pr9h954os280esiepjgdnffvcbh200d.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => $baseUrl . 'social-google-callback'

    ],

    'linkedin' => [
        'client_id' => '77rdbzbpmak1ze',
        'client_secret' => 'KRkKrAEyNoLBp1dm',
        'redirect' => $baseUrl . 'social-linkedin-callback',
    ],

    'github' => [
        'client_id' => '3b3bdc001f61ba892ca6',
        'client_secret' => '7d18a95f39a9579972e9f54add025c319a423c85',
        'redirect' => $baseUrl . 'social-github-callback',
    ],

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

];
