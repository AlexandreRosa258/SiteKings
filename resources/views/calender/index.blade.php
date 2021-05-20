@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/calender/index.css">

</head>

<body>
<div class="container">
  <div class="row">
    <div class="col s12">
      <div class="col s5">
        <a class="btn blue dark-4" href="{{route('calender.create')}}"><i class="material-icons left">add</i>Register</a>
      </div>
      <div class="col s5">
        <a class="btn red" href="{{ URL::to('/calender/pdf') }}"><i class="material-icons left">picture_as_pdf
        </i>Export</a>
      </div>
    </div>
  </div>

</div>

    <div class="container">

        <div class="row">
            <div class="col s12">
                <div class="card-panel">
                    <table class="striped">
                        <thead>
                            <tr>
                                <th class="center">Data/Date</th>
                                <th class="center">Descrição/Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($calenders as $calender)
                            <tr>
                                <td class="center">{{$calender->calender}}</td>
                                <td class="center">{{$calender->description}}</td>
                                <td>
                                  <div class="row">
                                    <div class="col s12 ">
                                        <div class="col s3">
                                            <a class="btn btn-primary btn-outline blue"
                                                href="{{route('calender.edit',$calender->id)}}"><i
                                                    class="large material-icons">create</i></a>
                                        </div>
                                        <div class="col s3">
                                            <form class="" action="{{route('calender.destroy',$calender->id)}}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn red"><i
                                                        class="material-icons">delete_forever</i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

@endsection
