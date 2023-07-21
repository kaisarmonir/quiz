<?php

namespace App\Http\Controllers;

use App\Models\question;
use App\Models\quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
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
        ->havingRaw('current_number < number')
        ->latest()->paginate(10);

        return view('question', compact('quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($quizId)
    {
        $quiz=quiz::where('id', $quizId)->first();

        if($quiz->current_number==$quiz->number){
            return redirect('question')->with('success', 'Already added '.$quiz->number.' question for ('.$quiz->title. ')');
        }

        return view('questionCreate', compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $validated= $request->validate([
            'question' => 'required',
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'right' => 'required',

            // 'image' => 'mimes:png,jpg,jpeg|required',


        ]);
        $validated['quiz_id'] = $id;

        question::create($validated);
        $quiz = quiz::where('id', $id)->first();;
        $quiz->current_number=$quiz->current_number+1;
        $quiz->update();

        if($quiz->current_number==$quiz->number){
            return redirect('question')->with('success', 'All question created successfully for ('.$quiz->title. ')');
        }

        return redirect()->back()->with('success', 'Question created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(question $question)
    {
        //
    }
}
