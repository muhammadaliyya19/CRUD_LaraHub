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

    public function create()
    {
        return view('question.addform');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        // dd($data);
        $question = QuestionModel::save($data);
        if ($question) {
            return redirect('/pertanyaan');
        } else {
            return view('question.addform');
        }
    }
}
