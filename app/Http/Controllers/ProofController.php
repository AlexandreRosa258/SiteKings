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


    public function store(Request $request)
    {
        $request-validate([
        "proof->level_id" -> "required";
        ]);
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
