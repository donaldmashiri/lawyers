<?php

namespace App\Http\Controllers;

use App\Models\Messaging;
use App\Models\User;
use App\Services\OpenAIService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $users = User::where('id', '!=', Auth::user()->id)->get();
        return view('messaging.index', compact('users'));

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
            'receiver_id' => ['required'],
            'message' => ['required'],
            'document' => ['required', 'file'],
        ]);

        $documentPath = $request->document->store('public/documents');

        $mssage = Messaging::create([
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
            'document' => $request->document,
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->back()->with('success', 'Message sent.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        $messages = Messaging::where('receiver_id', $user->id)
            ->where('user_id', Auth::user()->id)
            ->get();

        return view('messaging.show', compact('user', 'messages'));
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
