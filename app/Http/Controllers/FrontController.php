<?php

namespace Multimedios\Http\Controllers;

use Illuminate\Http\Request;

use Multimedios\Http\Requests;

class FrontController extends Controller
{
    public function welcome() {
        return view('welcome');
    }
}
