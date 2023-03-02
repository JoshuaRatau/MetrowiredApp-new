<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Metrowired | Enabling Tomorrow</title>

    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!------ Include the above in your HEAD tag ---------->
    <script></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <style>

    </style>
</head>

<body>
    <div class="img">
        <main class="my-auto">


            <div class="container">
                <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">

                    <div class="row">
                        <div class="col-sm-12 mx-auto d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <img src={{ asset('assets/img/home/MWLogo.png') }} class="img-fluid logo"
                                    alt="logo">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="text-center home-text">
                                <h2> System Admin</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 mx-auto d-flex align-items-center justify-content-center">
                            <form class="row mb-3">

                                <div class="mb-3">
                                    <label class="form-label ">Email</label>
                                    <input type="email" class="form-control form-control-lg input-box" id="email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label ">Password</label>
                                    <input type="password" class="form-control form-control-lg input-box" id="password">
                                </div>

                                <div class="p-3 d-flex align-items-center justify-content-center">
                                    <button type="button" onclick="window.location='{{ url("system/admin/dashboard") }}'" class="btn btn-primary btn-lg btnLogin">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
    </div>
</body>

</html>
