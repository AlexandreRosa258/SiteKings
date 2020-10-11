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
    <div class="container">
        <div class="row">
            <div class="col s12">
                @foreach ($questions as $question)
                @if ($question->answered == 1)

                <div class="card center">
                    <div class="card-content black-text">
                        <h3 class="center">Pergunta</h3>
                        <span class="card-title grey lighten-1"
                            style="border-radius:20px;text-transform: uppercase;font-weight: bolder;">{{$question->questions}}</span>
                    </div>
                    <div class="card-action black-text">
                        <p>Respostas: <textarea disabled class="black-text">{{$question->answer}}</textarea></p>
                        <p>Aluno: {{$question->user->name}}</p>
                        <p>
                            <a href="{{route('question.edit',$question->id)}}" class="btn-floating blue darken-4 tooltipped pulse"
                                data-position="left" data-tooltip="Answer"><i
                                    class="material-icons right">create</i></a>
                        </p>
                    </div>
                </div>

                @endif
                @endforeach
                <div class="container center">
                  <a href="{{route('question.index')}}" class="btn red darken-2 center"><i
                    class="material-icons left ">keyboard_return</i>Return</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
@endsection
