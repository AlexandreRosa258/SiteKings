@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/disable/index.css">
</head>

<body>
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <span class="card-title center">
                        <h4>Inactive - Questions</h4>
                    </span>
                   
                  </div>

                <div class="card-action">
                    <table>
                        <thead>
                            <tr>
                                <th class="center">Question</th>
                                <th class="center">Option A</th>
                                <th class="center">Option B</th>
                                <th class="center">Option C</th>
                                <th class="center">Option D</th>
                                <th class="center">Correct Answer</th>

                                <th class="center">Options</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($inactive as $leveltest)
                            <tr>
                                @if ($leveltest->status == 0)


                                <td class="center">{{$leveltest->question}}</td>
                                <td class="option center">{{$leveltest->option1}}</td>
                                <td class="option center">{{$leveltest->option2}}</td>
                                <td class="option center">{{$leveltest->option3}}</td>
                                <td class="option center">{{$leveltest->option4}}</td>
                                <td class="center">{{$leveltest->correct_answer}}</td>

                                <td class="center">
                                    <a class="btn btn-floating btn-outline green"
                                        href="{{route('test.active',$leveltest->id)}}"><i
                                            class="large material-icons">check</i></a>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <a class="btn red darken-2" href="{{route('test.index')}}"><i
              class="material-icons left">keyboard_return</i>Return</a>
        </div>
    </div>
</body>

</html>


@endsection
