<?php

namespace App\Http\Controllers;

use App\Models\CaseRuling;
use App\Models\Cases;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cases = Cases::where('user_id', auth()->user()->id)->get();
        return view('cases.index', compact('cases'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cases.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'case_type' => ['required'],
            'case_description' => ['required'],
            'client_name' => ['required'],
            'client_contact' => ['required'],
            'case_deadline' => ['required', 'date'],
            'case_document' => ['required', 'file', 'mimes:pdf,doc,docx'],
        ]);

        $documentPath = $request->case_document->store('documents');


        $data = Cases::create([
            'case_type' => $request->case_type,
            'case_description' => $request->case_description,
            'client_name' => $request->client_name,
            'client_contact' => $request->client_contact,
            'case_deadline' => $request->case_deadline,
            'case_document' => $documentPath,
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->back()->with('success', 'Document Uploaded Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $case = Cases::findorfail($id);
        $caseRulings = CaseRuling::where('cases_id', $id)->get();
        $caseResearches = Cases::where('id', '!=', $id)
            ->where(function ($query) use ($case) {
                $query->where('case_type', 'LIKE', '%' . $case->case_type . '%')
                    ->orWhere('case_description', 'LIKE', '%' . $case->case_description . '%');
            })
            ->get();
        return view('cases.show', compact('case', 'caseRulings', 'caseResearches'));
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
