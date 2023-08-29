<?php

namespace App\Http\Controllers;

use App\Models\Footballer;
use Illuminate\Http\Request;

class FootballerController extends Controller
{
    public function index() {
        $footballers = Footballer::all();
        return view('footballer.index',compact('footballers'));
    }
}
