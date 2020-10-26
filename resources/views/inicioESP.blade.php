<!DOCTYPE html>
<link src="http://maxcdn.bootstrapcdn.com/font-awesome/5.*/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Red+Hat+Text|Roboto+Mono&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}" />
<html>


<head>
    <title>Carlos Díaz · Paintings</title>
</head>

<body>


    <!-- ======================== COOKIES-->
    @include('cookieConsent::index')
    <!-- ======================== -->

    <div class="row">
        <div class="text-center cabezera col-md-12 mb-0">
            <h1 class="ml2 h1">Carlos Díaz · Cuadros </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-5">
            <nav class="nav navigation">
                <ul>
                    <li>
                        <ul class="menu">
                            <li class="ambcontent">
                                <a href="#" style="text-decoration:none;color:black;" id="subratllat">
                                    Obras<div class="arrow-down"></div>
                                </a>
                                <ul class="submenu">
                                    <li><a href="/trabajoreciente   " id="subratllat">Recientes</a></li>
                                    <li><a href="/vidareflectada" id="subratllat">Mundo Reflejado</a></li>
                                    <li><a href="/urbano" id="subratllat">Mundo Urbano</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="ambcontent"><a id="subratllat" href="/Novedades" class="text-decoration-none subra" style="color:black">Novedades</a></li>
                    <li class="ambcontent"><a id="subratllat" href="/aboutmeESP" class="text-decoration-none subra" style="color:black">Sobre mi</a></li>
                    <li class="ambcontent"><a id="subratllat" href="https://carlosdiaz.com.xn--carlosdaz-m5a.com/" class="text-decoration-none subra" style="color:black">Blog</a></li>
                    <li class="ambcontent"><a id="subratllat" href="/contacto" class="text-decoration-none subra" style="color:black">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="mt-5 row">
        <!-- <div class="col-md-12 mt-5">
			<img valing=bottom src="{{asset('images/portada.jpg')}}" class="img-fluid" alt="Responsive image" style="width: 900px;margin-left: auto;margin-right: auto; display: block;background-repeat: no-repeat; ">
		</div> -->
        <div class="col-md-12 mt-3">
            <img class="mySlides img-fluid" src="{{asset('images/portada.jpg')}}" style="width: 1000px;height:600px;margin-left: auto;margin-right: auto; display: block">
            <img class="mySlides img-fluid" src="{{asset('images/portada2.JPG')}}" style="width: 1000px;height:600px;margin-left: auto;margin-right: auto; display:block">
            <img class="mySlides img-fluid" src="{{asset('images/portada3.jpg')}}" style="width: 1000px;height:600px;margin-left: auto;margin-right: auto; display:block">
        </div>
    </div>

    <div class="row d-none d-lg-block" style="background-repeat: repeat;">
        <div class="col-md-12 col-sm-1">
            <div class="icon-bar">
                <a target="_blank" href="https://www.facebook.com/profile.php?id=1073695304" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a target="_blank" href="https://www.instagram.com/carlosdiazarte/" class="twitter"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="https://carlosdiaz.com.carlosdíaz.com" class="google"><i class="fab fa-blogger-b" aria-hidden="true"></i></a>
                <a target="_blank" href="https://www.youtube.com/channel/UC-lufcqqiChJagdn78Tt_Hg" class="youtube"><i class="fab fa-youtube"></i></a>
                <!--<a href="javascript:void(0);" onclick="mostrar()" class="idiomaa" id="idiom"><i class="fas fa-language" id="idiom"></i></a>-->
                <a href="/inicio" class="youtube" id="idioma"><img style="width:30px; height:40px" src="{{asset('images/spain.png')}}" alt=""></a>
                <a href="/home" class="youtube" id="idioma2"><img style="width:30px; height:40px" src="{{asset('images/english.png')}}" alt=""></a>
                <!--<a target="_blank"  class="youtube" id="idioma3"><i class="fas fa-chevron-up" style="color:#787878"></i></a>-->
            </div>
        </div>
    </div>

    <div class="row d-none d-lg-none d-md-block d-sm-block d-block d-sm-none" style="background-repeat: repeat;">
        <div class="col-md-12">
            <div class="icon-bar2 mt-5 mb-5">
                <a target="_blank" href="https://www.facebook.com/profile.php?id=1073695304" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a target="_blank" href="https://www.instagram.com/carlosdiazarte/" class="twitter"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="https://carlosdiaz.com.carlosdíaz.com" class="google"><i class="fab fa-blogger-b" aria-hidden="true"></i></a>
                <a target="_blank" href="https://www.youtube.com/channel/UC-lufcqqiChJagdn78Tt_Hg" class="youtube"><i class="fab fa-youtube"></i></a>
                <a href="/inicio" class="youtube" id="idioma"><img style="width:30px; height:40px" src="{{asset('images/spain.png')}}" alt=""></a>
                <a href="/home" class="youtube" id="idioma2"><img style="width:30px; height:40px" src="{{asset('images/english.png')}}" alt=""></a>
            </div>
        </div>
    </div>
    <div class="footer mt-2">
        <p>© Copyright Carlos Díaz. Desing by <a href="https://www.linkedin.com/in/biel-d%C3%ADaz-gadea/">Biel Díaz Gadea</a></p>


    </div>

    <!-------------- SCRIPTS -------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script>
        var textWrapper = document.querySelector('.ml2');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
        anime.timeline({
                loop: 1
            })
            .add({
                targets: '.ml2 .letter',
                scale: [4, 1],
                opacity: [0, 1],
                translateZ: 0,
                easing: "easeOutExpo",
                duration: 200,
                delay: (el, i) => 70 * i
            })


        $(".fa-check").click(function() {
            $(this).parent().addClass("accepted");
        });

        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 5000); // Change image every 2 seconds
        }
    </script>
</body>

</html>