@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card-panel z-depth-4">
                    <h2 class="center">All the Studentes</h2>

                    <div class="center">
                        <a class="btn light-blue darken-3" href="{{ URL::to('/student/pdf') }}"> <i
                                class="material-icons left">picture_as_pdf</i> Export to PDF</a>
                    </div>

                    <table class="striped">
                        <thead>
                            <tr>
                                <th class="center">Name</th>
                                <th class="center">Email</th>
                                <th class="center">Point Proof</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($student ?? '' as $data)
                            @if ($data->student == 1)

                            <tr>
                                <td class="center">{{ $data->name }}</td>
                                <td class="center">{{ $data->email }}</td>
                                <td class="center">{{ $data->points }}</td>
                            </tr>
                            @endif
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
