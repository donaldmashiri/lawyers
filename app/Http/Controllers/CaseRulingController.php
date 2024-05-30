<?php

namespace App\Http\Controllers;

use App\Models\CaseRuling;
use App\Models\Cases;
use Illuminate\Http\Request;

class CaseRulingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'cases_id' => ['required'],
            'case_ruling' => ['required'],
            'case_results' => ['required', 'min:5']
        ]);

        $data = CaseRuling::create([
            'cases_id' => $request->cases_id,
            'case_ruling' => $request->case_ruling,
            'case_results' => $request->case_results,
            'user_id' => auth()->user()->id,
        ]);

        $case = Cases::findOrFail($request->cases_id);
        $case->case_status = "auctioned";
        $case->save();

        return redirect()->back()->with('success', 'Case Ruling Added Successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(CaseRuling $caseRuling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CaseRuling $caseRuling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CaseRuling $caseRuling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CaseRuling $caseRuling)
    {
        //
    }
}
