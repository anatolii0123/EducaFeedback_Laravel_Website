<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function index() {
        return view('welcome');
    }

}