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
      <form class="" action="{{route('calender.store')}}" method="post">
        @csrf
        <div class="card">
          <h3 class="center">Create Calender</h3>
          <div class="card-action">
            <div class="row">
              <div class="col s12">
                <div class="col s6">
                  <div class="input-field col s12">
                    <label for="date">Date</label>
                    <i class="material-icons prefix">date_range</i>
                    <input  name="calender" class="datepicker"></input>

                  </div>
                </div>
                <div class="col s6">
                  <div class="input-field col s12">
                    <label for="textarea2">Description</label>
                    <i class="material-icons prefix">content_paste</i>
                    <textarea name="description" class="materialize-textarea" data-length="12"></textarea>
                  </div>
                </div>
                <div class="col s12">
                  <button type="submit" class="btn light-blue darken-4"><i class="material-icons left">check</i>Register</button>
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
