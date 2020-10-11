@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app-css/welcome.css">
</head>

<body>
    <div class="row">
        <div class="col s12">
            <div id="video" class="card">
                <div class="card-content white-text">
                    <p class="titulo1"><strong>Conheça Kings English School</strong></p>
                </div>
                <div class="card-action">
                    <div class="video">
                        <video src="images/propaganda.mp4" controls></video>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12  m3">
            <div class="card-panel">
                <div class="card-image">
                    <img src="image/logo2.jpg"><br>
                    <span class="card-title">Método Kings</span>
                </div>

                <div class="card-action">
                    <p>Aulas com conversação.</p>
                    <p>Apostilas com níveis de ensino.</p>
                </div>
            </div>
        </div>

        <div class="col s12  m3">
            <div class="card-panel">
                <div class="card-image">
                    <img src="icons/classes.png"><br>
                    <span class="card-title">Inglês na Pratica</span>
                </div>

                <div class="card-action">
                    <p>Aulas com conversação.</p>
                    <p>Apostilas com níveis de ensino.</p>
                </div>
            </div>
        </div>

        <div class="col s12  m3">
            <div class="card-panel">
                <div class="card-image">
                    <img src="icons/graduated.png"><br>
                    <span class="card-title">Método de Ensino</span>
                </div>

                <div class="card-action">
                    <p>Aulas com conversação.</p>
                    <p>Apostilas com níveis de ensino.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card horizontal">
        <div class="card-image">
            <div class="row">
                <div class="col s12">
                    <img class="teacher" class="teacher" src="images/teacher2.jpg">
                </div>
            </div>
        </div>
        <div class="card-stacked">
            <div class="card-content">
                <table class="highlight">
                    <tr>
                        <th>Name</th>
                        <td>Luiz Francisco</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Contact</th>
                        <td>+55 (41) 98415-5549</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Fromation</th>
                        <td>Formado em língua inglesa em 2019 pela faculdade Braz cubas.</td>
                        <td>Formado em 2019 curso Celta em Londres.</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Has Worked</th>
                        <td>Centro de idiomas cheers 2009 e 2010.</td>
                        <td>Escola de idiomas wizard 2011 a 2013.</td>
                        <td>Kings English School 2014 até o momento.</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
