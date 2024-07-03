<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function getLogout(){

        if(Auth::check()){

            Auth::logout();
            return Redirect::route('login');

        }
    }
}
