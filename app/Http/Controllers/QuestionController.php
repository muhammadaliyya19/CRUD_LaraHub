<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;
use Symfony\Component\Console\Question\Question;

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

    public function show($id)
    {
        $question = QuestionModel::getById($id);
        return view('question.show', compact('question'));
    }

    public function edit($id)
    {
        $question = QuestionModel::getById($id);
        return view('question.edit', compact('question'));
    }

    public function update($id, Request $request)
    {
        $question = QuestionModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id)
    {
        $delete = QuestionModel::destroy($id);
        return redirect('/pertanyaan');
    }
}
