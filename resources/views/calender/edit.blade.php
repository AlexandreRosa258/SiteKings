@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/calender/create.css">
  </head>
  <body>

    <div class="row">
    <div class="col s12">
      <form class="" action="{{route('calender.update',$calender->id)}}" method="post">
        @csrf
       @method('PUT')
        <div class="card">
          <div class="card-content white-text">
            <span class="card-title">Grid Creation</span>
          </div>
          <div class="card-action">
            <div class="row">
              <div class="col s12">
                <div class="col s6">
                  <div class=" input-field col s12">

                    <i class="material-icons prefix">date_range</i>
                    <input  name="calender" class="datepicker" value="{{$calender->calender}}"></input>

                  </div>
                </div>
                <div class="col s6">
                  <div class=" input-field col s12">
                    <label for="textarea2">Description</label>
                    <i class="material-icons prefix">attach_file</i>
                    <textarea name="description" class="materialize-textarea" data-length="120" >{{$calender->description}}</textarea>
                  </div>
                </div>
                <div class="col s12">
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  </body>
</html>

@endsection
