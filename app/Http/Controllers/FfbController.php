<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FlipForBusiness\Config;
use FlipForBusiness\GeneralAPI;

class FfbController extends Controller
{
    //
    public function index()
    {
        Config::$apiKey = '';
        Config::$isProduction = false;
        Config::$privateKey = '';

        $result = GeneralAPI::getBankInfo();
        return $result;
    }
}
