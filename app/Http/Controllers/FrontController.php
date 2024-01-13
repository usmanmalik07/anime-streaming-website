<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function shop()
    {
        return view('front.shop');
    }
    public function aboutus(){
        return view('front.aboutus');

    }
    public function contact(){
        return view('front.contact');

    }

}


