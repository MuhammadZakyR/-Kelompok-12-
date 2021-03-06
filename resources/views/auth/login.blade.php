<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="styleLogin.css">
    <script src="https://kit.fontawesome.com/9d394b7022.js" crossorigin="anonymous"></script>

    <title>Login</title>
</head>

<body>
    <div class="container">
        <h4 class="text-center">Welcome to voTCio!</h4>
        <hr>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label>E-mail/Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i>
                        </div>
                    </div>
                    <input type="text" name="email" class="form-control" placeholder="Masukkan e-mail/username anda">
                </div>
            </div>
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

            <div class="form-group">
                <label>Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-lock"></i>
                        </div>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan password anda">
                </div>
            </div>
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

            <div class="form-group">
                <div class="class-row">
                    <div class="col">
                        <div class="form-check"></div>
                        <input type="radio" class="form-check-input" name="">
                        <label>Remember me</label>
                    </div>
                    <div class="col">
                        <a href="">Forgot your password?</a>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <br><br>
            <div class="form-group">
                <label>Don't have an account yet?</label>

                 <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>