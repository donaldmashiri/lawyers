<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        $cases = Cases::where('case_status', '=!', 'pending');
        return view('testimonials.index', compact('cases', 'testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'case_type' => ['required', 'min:3'],
            'case_description' => ['required', 'min:3'],
        ]);



        $mssage = Testimonial::create([
            'case_type' => $request->case_type,
            'case_description' => $request->case_description,
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->back()->with('success', 'Testimonial Added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
