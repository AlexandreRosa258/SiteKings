<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{

   public function __construct($value='')
    {
       $this->middleware('auth');
    }

    public function index()
    {
        $photos = Photo::all();
        return view('photos.index',compact('photos'));
    }

    public function create()
    {
        $photo = new Photo();
        return view('photos.create',compact('photo'));
    }

    public function store()
    {
      request()->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
        $photo = Photo::create(request()->all());

        $photoName = $photo->id.'_photo_'.$photo->name.'.'.request()->image->getClientOriginalExtension();
        request()->image->move('photosimg',$photoName);

        $photo->image = $photoName;
        $photo->save();
       return redirect('photos');


    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
      $photo = Photo::find($id);
      return view('photos.edit',compact('photo'));
    }

    public function update(Request $request, $id)
    {
      request()->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'name'=> 'required'
      ]);
        $photo = Photo::find($id);
        $photoName = $photo->id.'_photo_'.$photo->name.'.'.request()->image->getClientOriginalExtension();
        request()->image->move('photosimg',$photoName);

        $photo->image = $photoName;
        $photo->save();
        return redirect()->route('photos.index');
    }

    public function destroy($id)
    {
      $photo = Photo::find($id);
      $photo->delete();
      return redirect('photos');
    }
}
