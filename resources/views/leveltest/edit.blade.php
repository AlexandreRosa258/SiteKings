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
    <div class="container">
      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-content white-text">
              <span class="card-title"><h3>Edit - Question</h3></span>
            </div>
            <div class="card-action">
              <form action="{{route('test.update',$leveltest->id)}}" method="post">
                @csrf
               @method('PUT')
                <div class="row">
               <div class="input-field col s12">
                 <textarea name="question" class="materialize-textarea" data-length="120" value="" >{{$leveltest->question}}</textarea>
                 <label for="textarea2">Question</label>
               </div>
     
             <div class="row">
               <div class="col s12">
                 <div class="input-field col s6">
                   <input name="option1" type="text" data-length="10" value="{{$leveltest->option1}}">
                   <label for="input_text">Option 1</label>
                 </div>
                 <div class="input-field col s6">
                   <input name="option2" type="text" data-length="10" value="{{$leveltest->option2}}">
                   <label for="input_text">Option 2</label>
                 </div>
                 <div class="input-field col s6">
                   <input name="option3" type="text" data-length="10" value="{{$leveltest->option3}}">
                   <label for="input_text">Option 3</label>
                 </div>
                 <div class="input-field col s6">
                   <input name="option4" type="text" data-length="10" value="{{$leveltest->option4}}">
                   <label for="input_text">Option 4</label>
                 </div>
               </div>
             </div>
             <div class="input-field col s12">
               <input name="correct_answer" type="text" data-length="10" value="{{$leveltest->correct_answer}}">
               <label for="input_text">Correct Answer</label>
             </div>
              </div>
              <button type="submit" class="btn blue darken-4"><i class="material-icons left">add</i>Saves</button>
                        <a class="btn red darken-2" href="{{route('test.index')}}"><i class="material-icons left">keyboard_return</i>Return</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>


@endsection
