<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class depancontroller extends Controller
{
    public function index() {
        $educations = Education::all(); // Fetch education data from the database
        return view("Depan.index"   , compact("educations"));
    }
}
