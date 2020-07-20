<?php

namespace App\Http\Controllers;

use App\Models\questionModel;
use Illuminate\Http\Request;

class questionController extends Controller
{
    public function create(){
        return view('question.form');
    }
    public function store(Request $request){
        $new_question = questionModel::save($request->all());
        //dd($request->all());
        return redirect('/questions');
    }
    public function index(){
        $questions = questionModel::get_all();
        return view('question.index', compact('questions'));
    }
}

