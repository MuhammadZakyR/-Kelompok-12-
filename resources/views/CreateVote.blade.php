<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light font-weight-bold bg-transparent fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="/home">voTCio</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/home">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                DASHBOARD
                    </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Data akun terdaftar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Data E-voting terdaftar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Data E-voting berlangsung</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('createvote')}}">CREATE VOTE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('joinvote')}}">JOIN VOTE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#joinvote">VOTE RESULT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contactus')}}">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#joinvote">FAQ</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
<div class="card-deck mt-3 mb-3 ml-3 mr-3 text-center">
  <div style="margin-top: 50px;"class="card" style="width:400px bg-dark">
    <img class="card-img-top" src="kotak1.jpeg" alt="Card image">
    <div class="card-body  bg-dark text-white">
      <h5 class="card-title">Vote Jenis 1</h5>
      <br>
      <a href="login.html" class="btn btn-primary">Create Vote</a>
    </div>
  </div>
  <div style="margin-top: 50px;"class="card" style="width:400px">
    <img class="card-img-top" src="vote4.jpeg" alt="Card image">
    <div class="card-body bg-dark text-white">
      <h5 class="card-title">Vote Jenis 2</h5>
      <br>
      <a href="login.html" class="btn btn-primary">Create Vote</a>
    </div>
  </div>
  <div style="margin-top: 50px;"class="card" style="width:400px">
    <img class="card-img-top" src="vote2.jpeg" alt="Card image">
    <div class="card-body bg-dark text-white">
      <h5 class="card-title">Vote Jenis 3</h5>
      <br>
      <a href="login.html" class="btn btn-primary">Create Vote</a>
    </div>
  </div>
  <div style="margin-top: 50px;"class="card" style="width:400px">
    <img class="card-img-top" src="vote31.jpeg" alt="Card image">
    <div class="card-body bg-dark text-white">
      <h5 class="card-title">Vote Jenis 4</h5>
      <br>
      <a href="login.html" class="btn btn-primary">Create Vote</a>
    </div>
  </div>
</div>



</body>
</html>
