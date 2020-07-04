<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Option;

class QuestionController extends Controller
{
    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        // Question::create([
        //     'questions' => $request->questions,
        //     'answer' => $request->answer
        // ]);

        $message = new Question();
        $message->question = $request->input('question');
        $message->answer = 'test heuula';
        $message->save();

        foreach($request->input('answer') as $val) {
            $option = new Option();
            $option->option = $val;
            $message->options()->save($option);
        }

        return redirect()->route('question.index');
    }

    public function index() {
        $questions = Question::all();
        return view('question', compact('questions'));
    }

    public function show($id) {
        $question = Question::with('options')->findOrFail($id);

        return view('detail', compact('question'));
    }
}
