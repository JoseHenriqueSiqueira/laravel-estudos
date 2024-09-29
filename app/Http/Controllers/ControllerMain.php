<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerMain extends Controller
{
    function chat() 
    {
        return view('chat');
    }
}
