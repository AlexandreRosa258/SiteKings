<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PDF;
class StudentController extends Controller
{
  public function __construct($value='')
    {
       $this->middleware('auth');
    }


    public function showStudents(){
        $student = User::all();
        return view('student.student', compact('student'));
      }

      // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $data = User::all();
  
        // share data to view
        view()->share('student',$data);
        
        $pdf = PDF::loadView('student.pdf_view', $data);
  
        // download PDF file with download method
        return $pdf->download('student.pdf');
      }
}
