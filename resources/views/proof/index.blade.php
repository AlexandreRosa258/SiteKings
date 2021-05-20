@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Proof</title>
    <link rel="stylesheet" href="css/proof/proof.css">
</head>
<body>
    @if ($proofs->isEmpty())
        <h1>Não há Perguntas cadastradas ainda !!!!!!</h1>
    @else
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <span class="card-title black-text center">
                        <h1>Level Test</h1>
                    </span>
                </div>
                <div class="card-panel">
                    <div class="card-content white-text">

                    </div>
                    <div class="card-action">

                        <form class="" action="{{route('proof.store')}}" method="post">
                          @csrf
                            @foreach ($proofs as $proof)

                            <p>{{$proof->test->question}}</p>
                            <p>
                                <label>
                                    <input class="with-gap" name="level_id['{{$proof->test->id}}']" type="radio" />
                                    <span>{{$proof->test->option1}}</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="level_id['{{$proof->test->id}}']" type="radio" />
                                    <span>{{$proof->test->option2}}</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="level_id['{{$proof->test->id}}']" type="radio" />
                                    <span>{{$proof->test->option3}}</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" name="level_id['{{$proof->test->id}}']" type="radio" />
                                    <span>{{$proof->test->option4}}</span>
                                </label>
                            </p>
                            <div class="divider"></div>

                            @endforeach
                            <br>
                            <button type="submit" class="btn green"><i
                                    class="material-icons left">check</i>Salvar</button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

@endsection
