<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teamsController extends Controller
{
    public function teams(){
        return view('teams');
    }
}
