<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createvoteController extends Controller
{
    function index(){
        return view("CreateVote");
    }
}
