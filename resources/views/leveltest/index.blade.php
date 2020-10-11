@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/test/index.css">
  </head>
  <body>
    <div class="row">
   <div class="col s12">
     <div class="card">
       <div class="card-content">
         <span class="card-title center"><h4>Questions - Level Test</h4></span>
       </div>
       <div class="row">
        <div class="col s12">
          <div class="col s6">
            <a class="btn blue darken-4" href="{{route('test.create')}}"><i class="material-icons left">add</i>Register</a>
          </div>
          <div class="col s6">
            <a class="btn red" href="{{route('test.inactive')}}"><i class="material-icons left">delete</i>Disabled</a>
          </div>
        </div>
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

        @foreach ($leveltests as $leveltest)
          @if ($leveltest->proof == 0)


            <tbody>
              <tr>
                  @if ($leveltest->status == 1)
                    <td class="center">{{$leveltest->question}}</td>
                    <td class="option center">{{$leveltest->option1}}</td>
                    <td class="option center">{{$leveltest->option2}}</td>
                    <td class="option center">{{$leveltest->option3}}</td>
                    <td class="option center">{{$leveltest->option4}}</td>
                    <td class="center green">{{$leveltest->correct_answer}}</td>

                    <td class="center">
                      <div class="row">
                        <div class="col s12">

                          <form action="{{ route('test.destroy',$leveltest->id) }}" method="POST">
                                 @csrf
                                 @method('DELETE')

                                 <div class="col s2">
                                   <a class="btn btn-outline blue" href="{{route('test.edit',$leveltest->id)}}"><i class="large material-icons">create</i></a>
                                 </div>
                                 <div class="col s3">
                                   <a class="btn btn-outline orange" href="{{route('test.active',$leveltest->id)}}"><i class="large material-icons">delete</i></a>
                                 </div>
                                 <div class="col s3">
                                   <button type="submit" class="btn red"><i class="large material-icons">delete_forever</i></button>
                                 </div>
                                 <div class="col s2">
                                   <a href="{{route('test.proof',$leveltest->id)}}"class="pintar btn green"><i class="large material-icons">description</i></a>
                                 </div>
                          </form>
                        </div>
                      </div>
                    </td>
                

                  @endif
              </tr>
            </tbody>
          @endif
      @endforeach
      </table>
       </div>
     </div>
   </div>
 </div>


  </body>
</html>


@endsection
