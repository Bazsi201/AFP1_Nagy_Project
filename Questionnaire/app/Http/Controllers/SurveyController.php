<?php

namespace App\Http\Controllers;
use App\Models\Questionnaire;


use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function show(Questionnaire $questionnaire, $slug) {
        return view('survey.show', compact('questionnaire'));
    }
}
