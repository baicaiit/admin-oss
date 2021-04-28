<?php

return [
    "access_id" => env('OSS_ACCESSKEYID', ''),
    "access_key" => env('OSS_ACCESSKEYSECRET', ''),
    "bucket" => env('OSS_BUCKET', ''),
    "endpoint" => env('OSS_ENDPOINT', ''),
    "ssl" => env('OSS_SSL', false),
];
