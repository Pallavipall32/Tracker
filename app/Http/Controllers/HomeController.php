<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashbaord(){
        return view("dashboard");
    }
    public function login(){
        return view("login");
    }
  
    public function manageasset(){
        return view("manageasset");
    }
    public function logout(){
     echo "logout page";
    }
}

