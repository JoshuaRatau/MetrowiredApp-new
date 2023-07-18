
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
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}"> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
        .navbar {
            padding-left: 4rem;
            padding-right: 4rem;
            background-color: #100f44;
            color: #ffffff;
        }
        .buttonName {
            width: 10rem !important;
            margin: 20px 20px 20px 20px;
            height: max-content !important;
            border-radius: 40px !important;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2) !important;
            background-color: whitesmoke !important;
            color: #100f44 !important;
            border: 1px solid#ffffff !important;
            font-weight: 600 !important;
        }
        .buttonName:active,
        .buttonName:hover {
            border: 1px solid #100f44 !important;
            background-color: #100f44 !important;
            color: whitesmoke !important;
            box-shadow: none !important;
        }
          .custom-toggler.navbar-toggler {
            border-color: #ffffff;
            color: #ffffff;
        }
        /* Setting the stroke to green using rgb values (0, 128, 0) */

        .custom-toggler .navbar-toggler-icon {
            background-image: url(
"data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src={{ asset('assets/img/home/Globe.png') }} alt="" width="70" height="70"
                    class="d-inline-block align-text-top">

            </a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  align-items-end justify-content-end" id="navbarScroll">



            <form class="d-flex">
                    <button class="btn btn-light buttonName" type="submit">
                        <svg width="40" height="34" viewBox="0 0 146 145" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M72.9545 0C58.6154 0 44.5983 4.25205 32.6757 12.2184C20.7532 20.1848 11.4607 31.5078 5.97335 44.7554C0.486002 58.003 -0.949735 72.5803 1.84769 86.644C4.64511 100.708 11.5501 113.626 21.6894 123.765C31.8286 133.904 44.7469 140.809 58.8105 143.607C72.8742 146.404 87.4515 144.968 100.699 139.481C113.947 133.994 125.27 124.701 133.236 112.778C141.202 100.856 145.454 86.8392 145.454 72.4999C145.434 53.2781 137.789 34.8496 124.197 21.2577C110.605 7.66584 92.1761 0.0207898 72.9545 0ZM72.9545 132.917C61.0053 132.917 49.3243 129.373 39.3889 122.735C29.4534 116.096 21.7097 106.66 17.1369 95.6201C12.5641 84.5808 11.3677 72.4329 13.6988 60.7132C16.03 48.9936 21.7841 38.2284 30.2335 29.7789C38.683 21.3295 49.4482 15.5754 61.1678 13.2442C72.8875 10.9131 85.0354 12.1095 96.0747 16.6822C107.115 21.255 116.551 28.9988 123.189 38.9343C129.828 48.8697 133.371 60.5507 133.371 72.4999C133.354 88.5182 126.983 103.875 115.656 115.202C104.329 126.528 88.9728 132.899 72.9545 132.917Z"
                                fill="black" />
                            <path
                                d="M33.4059 96.309L40.0034 106.435C49.9559 100.109 61.5189 96.7826 73.3116 96.8521C85.1038 96.9222 96.627 100.385 106.504 106.827L113.222 96.7863C101.422 88.911 87.5718 84.6679 73.3854 84.5833C59.1992 84.4987 45.2992 88.575 33.4059 96.309Z"
                                fill="black" />
                            <path
                                d="M100.142 57.3945C100.142 52.0174 98.5479 46.7609 95.5603 42.29C92.5727 37.819 88.3266 34.3343 83.3591 32.2765C78.3911 30.2188 72.9246 29.6804 67.6508 30.7295C62.3771 31.7785 57.5326 34.3678 53.7304 38.1701C49.9281 41.9723 47.3388 46.8166 46.2898 52.0905C45.2407 57.3644 45.7791 62.8308 47.8369 67.7988C49.8946 72.7663 53.3793 77.0124 57.8502 80C62.3215 82.9876 67.5777 84.582 72.9548 84.582C80.1631 84.5741 87.0736 81.7067 92.1703 76.61C97.267 71.5133 100.134 64.6028 100.142 57.3945ZM72.9548 72.4987C69.9672 72.4987 67.0473 71.6129 64.5636 69.9533C62.0798 68.2937 60.1436 65.9344 59.0004 63.1746C57.8572 60.4147 57.5581 57.3778 58.1409 54.4479C58.7237 51.5179 60.1622 48.8266 62.2744 46.7142C64.3871 44.6019 67.0781 43.1634 70.0083 42.5806C72.9379 41.9978 75.975 42.2969 78.7349 43.4401C81.4947 44.5833 83.854 46.5192 85.5136 49.0031C87.1732 51.487 88.059 54.4072 88.059 57.3945C88.059 59.378 87.6681 61.3421 86.9092 63.1746C86.1504 65.007 85.0375 66.6721 83.6353 68.075C82.2324 69.4772 80.5673 70.5901 78.7349 71.3489C76.9024 72.1078 74.9383 72.4987 72.9548 72.4987Z"
                                fill="black" />
                        </svg>
                          username
                    </button>
                </form action="{{ route('technician.home') }}" method="GET">
                
                
                    <button class="btn btn-light buttonName" type="submit"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <svg width="40" height="34" viewBox="0 0 51 53" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M34.332 35.3386L37.9985 39.005L51 26.0035L37.9985 13.002L34.332 16.6684L41.0408 23.4032H15.8959V28.6038H41.0408L34.332 35.3386Z"
                                fill="black" />
                            <path
                                d="M5.49468 0H28.8974C30.2767 0 31.5995 0.54792 32.5748 1.52322C33.5501 2.49853 34.0981 3.82133 34.0981 5.20061V10.4012H28.8974V5.20061H5.49468V46.8055H28.8974V41.6049H34.0981V46.8055C34.0981 48.1848 33.5501 49.5076 32.5748 50.4829C31.5995 51.4582 30.2767 52.0061 28.8974 52.0061H5.49468C4.11539 52.0061 2.7926 51.4582 1.81729 50.4829C0.841987 49.5076 0.294067 48.1848 0.294067 46.8055V5.20061C0.294067 3.82133 0.841987 2.49853 1.81729 1.52322C2.7926 0.54792 4.11539 0 5.49468 0V0Z"
                                fill="black" />
                        </svg>
                        {{ __('Logout') }}
                    </button>
                </form>


            </div>
        </div>
    </nav>


    @yield('content')


</body>
</html>
