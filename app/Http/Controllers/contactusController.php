<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactusController extends Controller
{
    function index(){
        return view("ContactUs");
    }
}