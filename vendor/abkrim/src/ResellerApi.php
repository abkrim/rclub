<?php

namespace Abkrim\Rclub\ResellerApi;

class ResellerApi
{

    private $url;
    private $proxy;
    private $auth_userid;
    private $api_key;

    function __construct() {
        $this->url          = 'https://test.httpapi.com/api/domains/';
        $this->proxy        = '94.23.87.185:9999';
        $this->$auth_userid = '140078';
        $this->$api_key     = 'VU5EnCpR0x28mA93tgviQd7eWgiSQLOz';
    }

    public function show() {
        //composer-autoload
    }
}

