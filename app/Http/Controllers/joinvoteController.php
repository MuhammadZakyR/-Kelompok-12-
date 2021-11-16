<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class joinvoteController extends Controller
{
    function index(){
        return view("JoinVote");
    }
}
