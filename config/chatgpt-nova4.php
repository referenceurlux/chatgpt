<?php

return [

    /*
    |--------------------------------------------------------------------------
    | ChatGPT Nova4 Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for ChatGPT such as, API_Key and Max Tokens to be used per request.
    |
    */

    'chatgpt_api_key' => env('CHATGPT_NOVA4_API_KEY', ''),

    'max_tokens' => env('CHATGPT_NOVA4_MAX_TOKENS', '1000'),

    'chatgpt_models' => ['gpt-4', 'gpt-4o', 'gpt-3.5-turbo'],
];
