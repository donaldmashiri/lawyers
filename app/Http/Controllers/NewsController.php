<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use App\Models\News;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $result = OpenAI::chat()->create([
//            'model' => 'gpt-3.5-turbo',
//            'messages' => [
//                ['role' => 'user', 'content' => 'Hello!'],
//            ],
//        ]);
//
//      return  $result->choices[0]->message->content;
        $news = News::paginate(3);
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'news_type' => ['required'],
            'title' => ['required'],
            'summary' => ['required'],
        ]);

        $data = News::create([
            'news_type' => $request->news_type,
            'title' => $request->title,
            'summary' => $request->summary,
        ]);
        return redirect()->back()->with('success', 'News Added Successfully.');

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
