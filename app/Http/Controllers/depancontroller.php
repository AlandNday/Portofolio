<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class depancontroller extends Controller
{
    public function index() {
        return view("Depan.index");
    }
}
