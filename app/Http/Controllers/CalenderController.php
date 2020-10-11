<?php

namespace App\Http\Controllers;

use App\Calender;
use Illuminate\Http\Request;
use PDF;

class CalenderController extends Controller
{
    public function __construct($value='')
    {
      $this->middleware('auth');
    }

    public function index()
    {
        $calenders = Calender::all();
       return view('calender.index',compact('calenders'));
    }

    public function create()
    {
        $calender = new Calender();
        return view('calender.create',compact('calender'));
    }


    public function store(Request $request)
    {
      $request->validate([
     'calender' => 'required',
     'description' => 'required',

      ]);

      Calender::create($request->all());
      return redirect()->route('calender.index');
    }


    public function createPDF() {
      // retreive all records from db
      $data = Calender::all();

      // share data to view
      view()->share('calender',$data);
      $pdf = PDF::loadView('calender.pdf_view', $data);

      // download PDF file with download method
      return $pdf->download('calender.pdf');
    }


    public function edit($id)
    {
        $calender = Calender::find($id);
        return view('calender.edit',compact('calender'));
    }

    public function update(Request $request, $id)
    {
      $request->validate([
     'calender' => 'required',
     'description' => 'required',

      ]);

      $calender = Calender::find($id);
      $calender->calender = $request->get('calender');
      $calender->description = $request->get('description');
      $calender->save();
      return redirect('calender');
    }

    public function destroy($id)
    {
      $calender = Calender::find($id);
      $calender->delete();
      return redirect('calender');
    }
}
