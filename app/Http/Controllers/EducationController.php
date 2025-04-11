<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::all();
        return view('Educations.index', compact('educations'));
    }

    public function create()
    {
        return view('Educations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'school_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'major' => 'required|string|max:255',
        ]);

        Education::create($request->all());
        return redirect('/')->with('success', 'Education record created successfully.');
    }

    public function edit(Education $education)
    {
        return view('Educations.edit', compact('education'));
    }

    public function update(Request $request, Education $education)
    {
        $request->validate([
            'school_name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'major' => 'required|string|max:255',
        ]);

        $education->update($request->all());
        return redirect()->route('Educations.index')->with('success', 'Education record updated successfully.');
    }

    public function destroy(Education $education)
    {
        $education->delete();
        return redirect()->route('Educations.index')->with('success', 'Education record deleted successfully.');
    }
}