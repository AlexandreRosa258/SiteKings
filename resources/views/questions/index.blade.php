@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/question/index.css">
  </head>
  <body>
    <div class="buttons container center">
      <a href="{{route('question.create')}}" class="btn red darken-2"><i class="material-icons left">textsms</i>Perguntar</a>
      <a href="{{route('question.answer')}}" class="btn red darken-2"><i class="material-icons left">question_answer</i>Responder</a>
    </div>
    <div class="container">
    @foreach ($questions as $question)
      @if ($question->answered == 0)
        <div class="row">
          <div class="col s12">
            <div class="card center">
              <div class="card-content black-text">
                <h3 class="center">Pergunta</h3>
                <span class="card-title grey lighten-1" style="border-radius:20px;text-transform: uppercase;font-weight: bolder;">{{$question->questions}}</span>
              </div>
             <div class="card-action black-text">
               <p>Respostas: <textarea disabled class="black-text">{{$question->answer}}</textarea></p>
               <p>Aluno: {{$question->user->name}}</p>
               <p><a href="{{route('question.edit',$question->id)}}" class="btn btn-floating blue darken-4"><i class="material-icons">create</i></a></p>
             </div>
           </div>
         </div>
       </div>
      @endif
    @endforeach
  </div>


  </body>
</html>
@endsection
