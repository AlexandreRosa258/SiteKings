<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questions;

class QuestionController extends Controller
{
  public function __construct($value='')
  {
     $this->middleware('auth');
  }
    public function index(){
      $questions = Questions::all();
      return view('questions.index',compact('questions'));
    }

    public function create()
    {
        $question = new Questions();
        return view('questions.create',compact('question'));
    }

    public function store(Request $request)
    {
      $request->validate([
     'questions' => 'required',
     'user_id' => 'required'
    ]);
    $question = new Questions;
    $question->questions = $request->questions;
    $question->user_id = auth()->user()->id;
    $question->save();
    return redirect('question');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
      $question = Questions::find($id);
      return view('questions.edit',compact('question'));
    }

    public function update(Request $request, $id)
    {
        $validate=([
          'answer' =>'required',
          'answered'=>'required'
        ]);

        $question = Questions::find($id);
        $question->answer = $request->get('answer');
        if($question->answered == 1){
          $question->answered = 0;
          $question->update(['answered' => 0]);
        }
        $question->save();
        return redirect('question');
    }

    public function destroy($id)
    {
        //
    }

    public function answer(){
      $questions = Questions::all();
      return view('questions.reply',compact('questions'));
    }
}
