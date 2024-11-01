<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::orderBy('created_at', 'desc')->get();

        return view('admin.question.index', [
            'questions' => $questions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.question.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_question = new Question();
        $new_question->ask = $request->ask;
        $new_question->answer = $request->answer;
        $new_question->save();

        return redirect()->back->withSuccess('Вопрос был успешно добавлен');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        return view('admin.question.edit', [
            'question' => $question
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        $question->ask = $request->ask;
        $question->answer = $request->answer;
        $question->save();

        return redirect()->back()->withSuccess('Вопрос был успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->back()->withSuccess('Вопрос был успешно удален');
    }
}
