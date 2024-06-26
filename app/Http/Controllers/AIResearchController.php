<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;

class AIResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Initialize the results variable as an empty collection
        $results = collect();

        if (!empty($search)) {
            // Perform search query if search input is not empty
            $results = Research::where('type', 'like', '%' . $search . '%')
                ->orWhere('details', 'like', '%' . $search . '%')
                ->get();
        }

        // Return the view with the search results
        return view('research.index', compact('results', 'search'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
