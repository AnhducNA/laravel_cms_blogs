<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(){
        return view('client.index');
    }
    function listNew(){
        return view('client.list-new');
    }
}
