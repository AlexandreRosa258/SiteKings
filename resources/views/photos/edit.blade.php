@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/test/create.css">
</head>
<body>


      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ $message }}</strong>
      </div>
      <img src="images/{{ Session::get('image') }}">
      @endif
{{-- 
      @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif --}}


  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content white-text">
          <span class="card-title"><h2>Create Gallery Photo</h2></span>
        </div>
        <div class="card-action">
          <form action="{{ route('photos.update',$photo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              <div class="row">
                <div class="input-field col s12">
                  <input type="text" name="name" value="{{$photo->name}}">
                  <label for="name">Name Image</label>
                </div>

                <div class="col s12">
                  <div class="file-field input-field">
                    <div class="btn">
                 <i class="material-icons">camera_alt</i>
                 <input type="file" name="image" id="avatarFile" >
               </div>
               <div class="file-path-wrapper">
                 <input class="file-path validate" name="image" type="text" value="{{$photo->image}}">
               </div>

             </div>
                </div>
                    <div class="col-md-6">
                      <a class="btn red darken-2" href="{{route('photos.index')}}"><i class="material-icons left">keyboard_return</i>Return</a>
                      <button type="submit" class="btn blue darken-4"><i class="material-icons left">add_a_photo</i>Upload</button>
                    </div>
                  </div>
          </form>
        </div>
      </div>
    </div>

</body>

</html>


@endsection
