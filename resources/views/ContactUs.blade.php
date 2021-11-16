<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="ContactUs.css">
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>

    <title>Contact Us</title>
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
    <section class="head pb-5">
        <div class="container py-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center py-3">Contact Us</h1>
                    <hr><br>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                    <span style="font-size: 30px; color:rgb(7, 7, 7)"><i class="fas fa-envelope-open"></i></span>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                    <h3 class="font-weight-light">Email</h3>
                                    <p class="font-weight-light">voTCio@gmail.com</p>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                    <span style="font-size: 35px; color:black;"><i class="fab fa-instagram-square"></i></span>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                    <h3 class="font-weight-light">Instagram</h3>
                                    <p class="font-weight-light">@voTCio.official</p>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                    <span style="font-size: 33px; color:black;"><i class="fab fa-facebook"></i></span>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                    <h3 class="font-weight-light">Facebook</h3>
                                    <p class="font-weight-light">@voTCio.official</p>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                    <span style="font-size: 31px; color:black;"><i class="fas fa-phone-square-alt"></i></span>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                    <h3 class="font-weight-light">Telepon</h3>
                                    <p class="font-weight-light">1234567890</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <form action="">
                                <label for="nama">NAMA</label>
                                <input type="text" class="form-control" placeholder=" Masukkan Nama Anda " id="nama ">
                                <label for="email">E-MAIL</label>
                                <input type="text" class="form-control" placeholder="Masukkan E-mail Anda" id="email">
                                <label for="pesan">PESAN</label>
                                <textarea class="form-control mb-3" cols="20" rows="5" id="pesan" placeholder="Tulis Pesan Yang Ingin Anda Sampaikan"></textarea>
                                <button type="submit" class="btn btn-primary float-lg-none">KIRIM PESAN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </form>
    < </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js " integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut " crossorigin="anonymous "></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js " integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k " crossorigin="anonymous "></script>
</body>

</html>