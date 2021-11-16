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
<br><center><h1 style="margin-top: 50px;">PLEASE CHOOSE ONE</h1></center><br>
<div class="card-deck mt-3 mb-3 ml-3 mr-3 text-center justify-content-center">
<div class="form-check">
  <div class="card" style="width:400px bg-dark">
    <img class="card-img-top" src="pria.jpeg" alt="Card image" width="512" height="512">
    <div class="card-body  bg-dark text-white">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Option 1
  </label>
    </div>
  </div>
</div>

<div class="form-check">
  <div class="card" style="width:400px bg-dark" width="400" height="400">
    <img class="card-img-top" src="girl.jpeg" alt="Card image">
    <div class="card-body  bg-dark text-white">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Option 2
  </label>
    </div>
  </div>
</div>
</div>

<br><br>
<center><a href="thxvote.html" type="submit"name="tambah" class="btn btn-primary">SUBMIT</a></center>
<br>
</body>
</html>