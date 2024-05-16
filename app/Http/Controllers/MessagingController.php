<?php

namespace App\Http\Controllers;

use App\Services\OpenAIService;
use Illuminate\Http\Request;

class MessagingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $openai;

    public function __construct()
    {
        $this->openai = new OpenAIService(env('OPENAI_API_KEY'));
    }

    public function index()
    {
//        $prompt = 'Hello';
//        $response = $this->openai->generateText($prompt);
//
//        return response()->json(['response' => $response]);
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
