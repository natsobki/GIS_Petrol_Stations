<?php

namespace App\Http\Controllers;

use Config;

class IndexController extends Controller
{

    public function index()
    {
        $apiKey = Config::get('googleapi.key');
        return view('index', compact('apiKey'));
    }

}