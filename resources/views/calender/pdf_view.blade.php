<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calender</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <style>
        .top {
            background: #D32F2F;
            color: white;
            text-align: center;
        }

        td {
            font: Arial, 10pt;
        }

    </style>
</head>

<body>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td class="top" scope="col">Date</td>
                    <td class="top" scope="col">Description</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($calender as $data)
                <tr>
                    <td class="date">{{ $data->calender}}</td>
                    <td>{{ $data->description}}</td>
                </tr>
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
    </div>
</body>

</html>
