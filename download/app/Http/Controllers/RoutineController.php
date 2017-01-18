<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\rountine;

class RoutineController extends Controller
{
    public function routine(){
        dd(rountine::all());

    }
}
