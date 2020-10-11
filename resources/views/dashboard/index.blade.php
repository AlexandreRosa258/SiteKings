@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/dash/dash.css">
</head>
<body>

  {{-- <div class="parallax-container">
   <div class="parallax"><img src="images/logo2.jpg"></div>
  </div> --}}


    <div class="container">
      <div class="row">
        <div class="col s12">

          <div class="col s4">
            <div class="card-panel">
              <a href="#"><img class="tooltipped icons" data-position="bottom" data-tooltip="Classes" src="icons/classes.png"></a>
            </div>
          </div>

          <div class="col s4">
            <div class="card-panel">
              <a href="#"><img class="tooltipped icons" data-position="bottom" data-tooltip="Home-Work" src="icons/homework.png" ></a>
            </div>
          </div>

          <div class="col s4">
            <div class="card-panel">
              <a href="{{route('calender.index')}}"><img class="tooltipped icons" data-position="bottom" data-tooltip="Calender" src="icons/calendar.png" ></a>
            </div>
          </div>


          <div class="col s4">
            <div class="card-panel">
              <a href="{{route('photos.index')}}"><img class="tooltipped icons" data-position="bottom" data-tooltip="Picture" src="icons/picture.png" ></a>
            </div>
          </div>

          <div class="col s4">
            <div class="card-panel">
              <a href="#"><img class="tooltipped icons" data-position="bottom" data-tooltip="Activities" src="icons/activities.png" ></a>
            </div>
          </div>

          <div class="col s4">
            <div class="card-panel">
              <a href="{{route('question.index')}}"><img class="tooltipped icons" data-position="bottom" data-tooltip="Questions" src="icons/question.png" ></a>
            </div>
          </div>

          </div>
        </div>
      </div>

  <!-- <div class="parallax-container">
   <div class="parallax"><img src="images/logo2.jpg"></div>
  </div> -->

  <a  class="test btn tooltipped pulse red darken-2" data-position="left" data-tooltip="Level Test" href="{{route('proof.index')}}">Teste de Nível</a>


</body>
</html>
@endsection
