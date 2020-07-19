<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class questionController extends Controller
{
    public function create(){
        return view('question.form');
    }
    public function store(Request $request){
        $new_question = questionModel::save($request->all());
        return redirect('/questions')
    }
}

