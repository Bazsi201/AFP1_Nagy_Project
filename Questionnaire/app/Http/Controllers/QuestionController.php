<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(\App\Models\Questionnaire $questionnaire) {
        return view('question.create', compact('questionnaire'));
    }

    public function store(\App\Models\Questionnaire $questionnaire) {
        $data = request()->validate([
            'question.question' => 'required',
            'answers.*.answer' => 'required',
        ]);

    }
}
