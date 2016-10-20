<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],


    'facebook' => [
        'client_id' => '362926474098265',
        'client_secret' => 'd8c94c1d30a4e3318d67f45a44384091',
        'redirect' => 'http://www.localhostdemo.com/auth/facebook/callback',
    ],


    'google' => [
        'client_id' => '53628973458-9b4kvrq30dd645rui10gpg0nbqpf4l0k.apps.googleusercontent.com',
        'client_secret' => '2fiCO6p0jfNIAE5UzMLUMsCg',
        'redirect' => 'http://www.localhostdemo.com/auth/google/callback',
    ],

    'twitter' => [
        'client_id' => 'MIB7MBVCbzoXIO53CWsCXSJAP',
        'client_secret' => 'n6vgMiEcnFb5TPVQyradVb95AjmEwoPvpu9Gjdao3zh2YmxWre',
        'redirect' => 'http://www.localhostdemo.com/auth/twitter/callback',
    ],


    'linkedin' => [
        'client_id' => '75n7fba7s3pmoa',
        'client_secret' => 'eWJoENQYqCZetxH2',
        'redirect' => 'http://www.localhostdemo.com/auth/linkedin/callback',
    ],

    'github' => [
        'client_id' => '44e7f6cbb2fb9a14a804',
        'client_secret' => '32745e0d50e9798d4284bdc94d795510ebc9f410',
        'redirect' => 'http://www.localhostdemo.com/auth/github/callback',
    ],

];
