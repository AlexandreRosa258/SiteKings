<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All the Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

        <style>
            .top{
                background: #D32F2F;
                color: white
            }
            tr{
              text-align: center
            }
        </style>
  </head>

  <body>
    <table class="table table-striped">
    <thead>
      <tr>
        <td class="top">Students</td>
        <td class="top">Email</td>
        
      </tr>
      </thead>
      <tbody>
        @foreach ($student as $data)
        @if ($data->student == 1)
            
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>          
        </tr>

        @endif
        @endforeach
        
      </tbody>
    </table>
    <footer class="page-footer font-small red">

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">
         <p> © 2020 Copyright:Kings English School</p>
      </div>
      <!-- Copyright -->
    
    </footer>
    <!-- Footer -->
  </body>
</html>