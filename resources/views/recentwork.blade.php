<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/recentwork.css') }}" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <title>Carlos Diaz · Recent work</title>
</head>

<body>
  @include('cookieConsent::index')


  <div class="container gallery-container">
    <div class="row">
      <div class="col-md-12 pt-4">

        <nav class="nav navigation">
          <ul>
            <li><a href="/recentwork" class="text-decoration-none menusuperior" style="color:black; text-decoration:none">Recent</a></li>
            <li><a href="/reflected" class="text-decoration-none menusuperior" style="color:black;  text-decoration:none">Reflected world</a></li>
            <li><a href="/urban" class="text-decoration-none menusuperior" style="color:black;  text-decoration:none">Urban world</a></li>
          </ul>
        </nav>
      </div>
    </div>



    <div class="row w3-container w3-center w3-animate-bottom">
      <div class="col-md-3">
        <nav class="nav navigation d-block" style="float:left">
          <div class="backBtn">
            <span class="line tLine"></span>
            <span class="line mLine"></span>
            <span class="label"> <a href="/home" style="text-decoration:none;color:black;">Back Home</a> </span>
            <span class="line bLine"></span>
          </div>
        </nav>
      </div>
      <div class="col-md-6">
        <h1 class="col-md-12 mt-5 d-block">Recent work</h1>

      </div>

    </div>

    <div class="tz-gallery ">
      <div class="row mt-5" style="margin-top:50px">

        <div class="row">

          @foreach($galeriafotos as $galeriafotos)
          <div class="col-sm-12 col-md-6 col-lg-4">
            <a class=" lightbox" href="{{'storage/'.$galeriafotos->image}}">
              <img src="{{'storage/'.$galeriafotos->image}}" alt="{{$galeriafotos->nom_foto}}">
            </a>
            <p style="color:grey;font-size:10px;text-align:right">{{$galeriafotos->nom_foto}}</p>

          </div>
          @endforeach

        </div>
      </div>
    </div>
    <div class="footer mt-0">
      <p>© Copyright Carlos Díaz. Desing by <a href="https://www.linkedin.com/in/biel-d%C3%ADaz-gadea/">Biel Díaz Gadea</a></p>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>
    baguetteBox.run('.tz-gallery');
  </script>
</body>

</html>