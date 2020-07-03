<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = QuestionModel::getAll();
        return view('question.index', compact('questions'));
    }

    public function addQuestion()
    {
        $questions = QuestionModel::getAll();
        return view('question.addform', compact('questions'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        // dd($data);
        $question = QuestionModel::save($data);
    }
}
