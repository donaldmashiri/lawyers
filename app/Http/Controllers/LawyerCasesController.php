<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\CustomerRequest;
use App\Models\Messaging;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LawyerCasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('user_type', 'lawyer')->get();
        return view('lawyer-cases.index', compact('users'));
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
        $lawyer = User::findOrFail($id);
        if ($lawyer->user_type !== 'lawyer') {
            return abort(404, 'User is not a lawyer');
        }

        $cases = Cases::where('user_id', $lawyer->id)
            ->orWhereNull('user_id')
            ->get();

        $customer_requests = CustomerRequest::where('lawyer_id', $lawyer->id)
            ->where('user_id', Auth::user()->id)
            ->get();



        return view('lawyer-cases.show', compact('lawyer', 'cases', 'customer_requests'));

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
