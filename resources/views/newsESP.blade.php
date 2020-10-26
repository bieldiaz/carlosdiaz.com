<!DOCTYPE html>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link src="http://maxcdn.bootstrapcdn.com/font-awesome/5.*/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Red+Hat+Text|Roboto+Mono&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" type="text/css" href="{{ asset('/css/aboutme.css') }}" />

<html>

<head>
    <title>Carlos Díaz · Novedades </title>
</head>
@include('cookieConsent::index')

<div class="container" style="margin-top:-29px">


    <div class="row w3-container ">
        <div class="col-md-3">
            <nav class="nav navigation d-none d-lg-block" style="float:left">
                <div class="backBtn">
                    <span class="line tLine"></span>
                    <span class="line mLine"></span>
                    <span class="label"> <a href="/inicio" style="text-decoration:none;color:black;">Volver</a> </span>
                    <span class="line bLine"></span>
                </div>
            </nav>
        </div>

        <div class="col-md-6 mt-5">
            <h1 class="col-md-12 mt-5 d-block w3-center w3-animate-bottom">Novedades</h1>

        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            @foreach($news as $news)
            <div class=" mt-5 w3-container w3-center w3-animate-top">
                <p><i class="fas fa-thumbtack"></i> {{$news->descripcion}} </p>
            </div>
            @endforeach
        </div>
    </div>

</div>

<div class="row d-none d-lg-none d-md-block d-sm-block d-block d-sm-none">
    <div class=" col-md-12">
        <div class="icon-bar2 mt-5 mb-5">
            <a href="/inicio" class="facebook" style="text-decoration:none; color:white"><i class="fas fa-arrow-circle-left"></i>Volver</a>
        </div>
    </div>
</div>

<div class="footer mb-0">
    <p>© Copyright Carlos Díaz. Desing by <a href="https://www.linkedin.com/in/biel-d%C3%ADaz-gadea/">Biel Díaz Gadea</a></p>
</div>

<body>

</body>

</html>