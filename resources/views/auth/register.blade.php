<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="styleSignUp.css">
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>

    <title>Sign Up</title>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Let's Get Started</h2>
        <hr>
        <form  method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="">Nama Lengkap</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i>
                        </div>
                    </div>
                    <input name="name" type="text" class="form-control" placeholder="Masukkan nama lengkap anda">
                </div>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    <input name="email" type="text" class="form-control" placeholder="Masukkan e-mail anda">
                </div>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                    </div>
                    <input name="password" type="password" class="form-control" placeholder="Masukkan password anda">
                </div>
            </div>
            <div class="form-group">
                <label for="">Verifikasi Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-lock"></i>
                        </div>
                    </div>
                    <input name="password_confirmation" type="password" class="form-control" placeholder="Masukkan password anda sekali lagi">
                </div>
            </div>
            <button style="margin-top: 50px;" type="submit" class="btn btn-primary float-right">Create an account</button>
            <a style="margin-top: 50px;" class="btn btn-primary float-left" href="/login" >Have an account</a>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>