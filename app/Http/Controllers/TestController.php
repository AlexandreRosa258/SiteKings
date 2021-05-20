<?php
namespace App\Http\Controllers;
use App\Test;
use App\Proof;
use Illuminate\Http\Request;

class TestController extends Controller
{


      public function __construct($value='')
      {
         $this->middleware('auth');
      }

      public function index()
      {
          $leveltests = Test::all();
          return view('leveltest.index',compact('leveltests'));
      }

      public function create()
      {
          $leveltest = new Test();
          return view('leveltest.create',compact('leveltest'));
      }

      public function store(Request $request)
      {
        $request->validate([
       'question' => 'required',
       'option1' => 'required',
       'option2' => 'required',
       'option3' => 'required',
       'option4' => 'required',
       'correct_answer' => 'required'

     ]);
      Test::create($request->all());
      return redirect()->route('test.create');
      }

      public function show($id)
    {
        //
    }


      public function edit($id)
      {
          $leveltest = Test::find($id);
          return view('leveltest.edit',compact('leveltest'));
      }

      public function update(Request $request, $id)
      {
        $request->validate([
          'question' => 'required',
          'option1' => 'required',
          'option2' => 'required',
          'option3' => 'required',
          'option4' => 'required',

          'correct_answer' => 'required'

            ]);

            $leveltest = Test::find($id);
            $leveltest->question = $request->get('question');
            $leveltest->option1 = $request->get('option1');
            $leveltest->option2 = $request->get('option2');
            $leveltest->option3 = $request->get('option3');
            $leveltest->option4 = $request->get('option4');

            $leveltest->correct_answer = $request->get('correct_answer');

            $leveltest->save();
            return redirect('test');
      }

      public function destroy($id)
      {
        $test = Test::find($id);
        $test->delete();
        return redirect('test');
      }

      public function inactive(){
        $inactive = Test::all();
        return view('leveltest.inactive',compact('inactive'));
      }

      public function active($id, Request $request){
        $leveltest = Test::find($id);

        if($leveltest->status == 1){
          $leveltest->status = 0;
          $leveltest->update(['status' => 0]);
          $leveltest->save();
        }else{
          $leveltest->status = 1;
          $leveltest->update(['status' => 1]);
          $leveltest->save();

          return redirect()->route('test.inactive');
        }
        return redirect('test');
      }

      public function proof($id){
        $leveltest = Test::find($id);
        $proof = new Proof();
        $proof2 = Proof::count();

          if ($proof2 < 10) {
            if($leveltest->proof == 0){
              $leveltest->proof = 1;
              $leveltest->update(['proof' => 1]);
              $proof->level_id = $leveltest->id;

              $proof->save();

          }

          }


        return redirect('test');
      }
}
