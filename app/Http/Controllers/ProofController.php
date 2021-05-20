<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proof;

class ProofController extends Controller
{

    public function __construct($value='')
    {
       $this->middleware('auth');
    }


    public function index()
    {
        $proofs = Proof::all();
        return view('proof.index',compact('proofs'));
    }


    public function store(Request $request){

      $validate([
        'level_id' =>'required'
      ]);

      $test = new User();
      $test->point=$request->get('radio');
      $test->save();


   }



   //
   //     $request->validate([
   //   'question' => 'required',
   //   'option1' => 'required',
   //   'option2' => 'required',
   //   'option3' => 'required',
   //   'option4' => 'required',
   //   'correct_answer' => 'required'
   //
   // ]);
   //
   //  $leveltest = Test::find($id);
   //  $leveltest->question = $request->get('question');
   //  $leveltest->option1 = $request->get('option1');
   //  $leveltest->option2 = $request->get('option2');
   //  $leveltest->option3 = $request->get('option3');
   //  $leveltest->option4 = $request->get('option4');
   //  $leveltest->correct_answer = $request->get('correct_answer');
   //  return redirect('dashboard.index');
    }





    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

}
