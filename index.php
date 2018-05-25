<!doctype html>
<html lang="de">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">

  <title>Mensa Vote</title>

  <link rel="apple-touch-icon" sizes="180x180" href="favicon2/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon2/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon2/favicon-16x16.png">
  <link rel="manifest" href="favicon2/site.webmanifest">
  <link rel="mask-icon" href="favicon2/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <style>
    body,
    html {
      overflow-x: none;
      height: 100%;
    }

    .logo {
      width: 200px;
      height: auto;
      position: relative;
      float: left;
    }

    .carousel {}

    .imagee {
      width: 200px;
      height: auto;
    }
  </style>
</head>

<body>

  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Mensa Vote</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="#">Poly</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Uni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Clausius</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 imagee" src="pictures/votingStudents.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="card-columns">
    <div class="card">
      <img class="card-img-top" src="pictures/ETH_Logo.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title that wraps to a new line</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little
          bit longer.</p>
      </div>
    </div>
    <div class="card p-3">
      <blockquote class="blockquote mb-0 card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer class="blockquote-footer">
          <small class="text-muted">
            Someone famous in
            <cite title="Source Title">Source Title</cite>
          </small>
        </footer>
      </blockquote>
    </div>
    <div class="card">
      <img class="card-img-top" src="pictures/Uni_originell.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text">
          <small class="text-muted">Last updated 3 mins ago</small>
        </p>
      </div>
    </div>
    <div class="card bg-primary text-white text-center p-3">
      <blockquote class="blockquote mb-0">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
        <footer class="blockquote-footer">
          <small>
            Someone famous in
            <cite title="Source Title">Source Title</cite>
          </small>
        </footer>
      </blockquote>
    </div>
  </div>


  <footer class="container py-5">
    <div class="row">
      <div class="col-12 col-md">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2">
          <circle cx="12" cy="12" r="10"></circle>
          <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
          <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
          <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
          <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
          <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
          <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
        </svg>
        <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li>
            <a class="text-muted" href="#">Cool stuff</a>
          </li>
          <li>
            <a class="text-muted" href="#">Random feature</a>
          </li>
          <li>
            <a class="text-muted" href="#">Team feature</a>
          </li>
          <li>
            <a class="text-muted" href="#">Stuff for developers</a>
          </li>
          <li>
            <a class="text-muted" href="#">Another one</a>
          </li>
          <li>
            <a class="text-muted" href="#">Last time</a>
          </li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li>
            <a class="text-muted" href="#">Resource</a>
          </li>
          <li>
            <a class="text-muted" href="#">Resource name</a>
          </li>
          <li>
            <a class="text-muted" href="#">Another resource</a>
          </li>
          <li>
            <a class="text-muted" href="#">Final resource</a>
          </li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li>
            <a class="text-muted" href="#">Business</a>
          </li>
          <li>
            <a class="text-muted" href="#">Education</a>
          </li>
          <li>
            <a class="text-muted" href="#">Government</a>
          </li>
          <li>
            <a class="text-muted" href="#">Gaming</a>
          </li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li>
            <a class="text-muted" href="#">Team</a>
          </li>
          <li>
            <a class="text-muted" href="#">Locations</a>
          </li>
          <li>
            <a class="text-muted" href="#">Privacy</a>
          </li>
          <li>
            <a class="text-muted" href="#">Terms</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>




  <script type="text/javascript">
    $('.carousel').carousel({
      interval: 2000
    })


  </script>




</body>

</html>
