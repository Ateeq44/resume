<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/style.css')}}">
    <title>cv maker</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style type="text/css">
        body{
            font-family: "Roboto", sans-serif;
        }

        .bg-gradients-1{
            background: #004AAD;
            background: linear-gradient(120deg,rgba(0, 74, 173, 1) 0%, rgba(255, 117, 31, 1) 100%);
            padding: 100px 0px;
        }

        .p-60{
            padding: 100px 0px;
        }
        .bg-orange{
            background: #ff751f;
        }
        @media only screen and (max-width: 600px) {
            .logo{
                width: 200px !important;
            }
        }

        @media only screen and (max-width: 390px) {
            .logo{
                width: 160px !important;
            }
        }
        @media only screen and (max-width: 350px) {
            .logo{
                width: 150px !important;
            }
        }
    </style>
</head>
<body>
    <nav style="box-shadow: 0px 0px 10px -6px black;" class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}"><img class="logo" src="{{asset('images/logo.png')}}"></a>
            <a href="{{ url('login') }}" class="btn btn-success">Build My Resume</a>
        </div>
    </nav>
    @yield('content')

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>