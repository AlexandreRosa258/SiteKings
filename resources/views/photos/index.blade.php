@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/photo/index.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content black-text">
                        <span class="card-title center"><h4>Gallery Photos</h4></span>
                        @foreach ($photos as $photo)
                        <br>
                        <p class="title center white-text blue darken-4">{{$photo->name}}</p>
                        <img class="materialboxed" src="{{asset('photosimg/'.$photo->image)}}">
                        <a href="{{route('photos.edit',$photo->id)}}" class=" btn blue darken-4"><i
                          class="material-icons">create</i></a>
                          <form class="" action="{{route('photos.destroy',$photo->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn red darken-2"><i class="material-icons">delete</i></button>
                        </form>
                        @endforeach
                    </div>
                    <div class="card-action">
                        <div class="container">
                            <div class="row">
                                <div class="col s12">
                                    <a class="btn-floating btn-large tooltipped btn blue darken-4"
                                        data-position="bottom" data-tooltip="Add Picture"
                                        href="{{route('photos.create')}}"><i
                                            class="material-icons center">add_a_photo</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
@endsection
