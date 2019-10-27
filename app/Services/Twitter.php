<?php

namespace App\Services;

class Twitter {
    protected $api_key;
    
    
    public function __construct($apikey)
    {
        $this->apikey = $apikey;
    }
}