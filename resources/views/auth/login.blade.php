<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body style="background-color: #739072">
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan']=="gagal") {
        echo "<div class'alert'>Username dan Password tidak sesuai !</div>";
        }
    }
?>
    <div class="container">
        <div class="card position-absolute top-50 start-50 translate-middle rounded"
            style="width: 25rem; height: 19rem; border-radius: 17px">
            <div class="card-body" style="background-color: #f4f7f2;">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control"  placeholder="Password">
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <button class="btn btn-secondary" type="submit">Login</button>
                        {{-- <a href="{{ url('/admin/dashboard') }}" class="btn btn-secondary"
                            style="border-radius: 15px; width: 100;">Login</a> --}}
                    </div>
                    <div>
                        <p>Belum punya akun? silahkan daftar terlebih dahulu</p>
                        <a href="{{ url('register') }}">
                            <p>Register</p>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
