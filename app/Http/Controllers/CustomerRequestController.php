<?php

namespace App\Http\Controllers;

use App\Models\CustomerRequest;
use App\Models\Messaging;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('requests.index', compact('users'));
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
            'lawyer_id' => ['required'],
            'details' => ['required'],
        ]);

        $request = CustomerRequest::create([
            'lawyer_id' => $request->lawyer_id,
            'details' => $request->details,
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->back()->with('success', 'Request Successfully Sent.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerRequest $customerRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerRequest $customerRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customerRequest = CustomerRequest::findOrFail($id);

        $customerRequest->update(['payment' => 'paid']);

        return redirect()->back()->with('success', 'Payment was Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerRequest $customerRequest)
    {
        //
    }
}
