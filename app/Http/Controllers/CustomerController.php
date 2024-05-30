<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
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
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|string|max:255',
            'email' => 'required|min:3|string|email|max:255|unique:users',
            'date_of_birth' => 'required|min:3|date|before:' . \Carbon\Carbon::now()->subYears(18)->format('Y-m-d'),
            'gender' => 'required|string|in:male,female',
            'address' => 'required|min:3|string|max:255',
            'phone' => 'required|min:7|numeric',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'user_type' => 'customer',
            'name' => $request->name,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'Customer account was successfully created.');
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
