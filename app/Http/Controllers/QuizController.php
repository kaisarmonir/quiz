<?php

namespace App\Http\Controllers;

use App\Models\quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quiz=quiz::select('current_number', 'number', 'id', 'time', 'catagory', 'title')
        ->groupBy('current_number', 'number', 'id', 'time', 'catagory', 'title')
        ->havingRaw('current_number = number')
        ->latest()->paginate(10);

        return view('quiz', compact('quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validated= $request->validate([
            'catagory' => 'required',
            'title' => 'required',
            'number' => 'required|numeric',
            'time' => 'required|numeric',
            // 'image' => 'mimes:png,jpg,jpeg|required',


        ]);

        quiz::create($validated);

        return redirect()->back()->with('success', 'Quiz created successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(quiz $quiz)
    {
        $questions=$quiz->questions;
        return view('test', compact('quiz','questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(quiz $quiz)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, quiz $quiz)
    {

    }

    public function answer(Request $request, quiz $quiz)
    {
        $ans=$request->all();
        $questions=$quiz->questions;

        return view('ans', compact('ans','questions','quiz'));
    }

    public function list()
    {
        $lists=quiz::select('current_number', 'number', 'id', 'time', 'catagory', 'title')
        ->groupBy('current_number', 'number', 'id', 'time', 'catagory', 'title')
        ->havingRaw('current_number = number')
        ->latest()->paginate(10);;


        return view('list', compact('lists'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(quiz $quiz)
    {
        $quiz->delete();
        return redirect()->back()->with('success', 'Quiz deleted successfully');
    }
}
