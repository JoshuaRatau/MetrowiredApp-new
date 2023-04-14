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
            color: #ffffff;
        }

        .buttonName {
            width: 10rem !important;
            margin: 20px 20px 20px 20px;
            height: max-content !important;
            border-radius: 40px !important;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2) !important;
            background-color: #100f44 !important;
            color: #ffffff !important;
            border: 1px solid #100f44 !important;
            font-weight: 600 !important;
        }

        .buttonName:active,
        .buttonName:hover {
            border: 1px solid #ffffff !important;
            background-color: #ffffff !important;
            color: #100f44 !important;
            box-shadow: none !important;
        }

           .buttonLog {
            width: 10rem !important;
            margin: 20px 20px 20px 20px;
            height: max-content !important;
            border-radius: 40px !important;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2) !important;
            background-color: whitesmoke !important;
            color: #100f44 !important;
            border: 2px solid whitesmoke !important;
            font-weight: 600 !important;
        }

        .buttonLog:active,
        .buttonLog:hover {
            border: 2px solid #100f44 !important;
            background-color: #100f44 !important;
            color: whitesmoke !important;
            box-shadow: none !important;
        }



        /* .custom-toggler.navbar-toggler {
            border-color: #ffffff;
            color: #ffffff;
        }
        /* Setting the stroke to green using rgb values (0, 128, 0) */
    </style>
</head>

<body>

    <nav class="navbar bg-light navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src={{ asset('assets/img/home/Globe.png') }} alt="" width="70" height="70"
                    class="d-inline-block align-text-top">

            </a>
            {{-- <button class="btn btn-light buttonName" type="submit"
                onclick="window.location='{{ url('registration') }}'">
                <svg width="40" height="34" viewBox="0 0 107 107" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="53.5069" cy="53.4332" r="50.1665" stroke="white" stroke-width="6" />
                    <path
                        d="M84.749 72.9112H78.1709V66.3731C78.1709 66.0135 77.8748 65.7193 77.513 65.7193H73.5662C73.2044 65.7193 72.9083 66.0135 72.9083 66.3731V72.9112H66.3302C65.9684 72.9112 65.6724 73.2054 65.6724 73.565V77.4878C65.6724 77.8474 65.9684 78.1417 66.3302 78.1417H72.9083V84.6797C72.9083 85.0393 73.2044 85.3336 73.5662 85.3336H77.513C77.8748 85.3336 78.1709 85.0393 78.1709 84.6797V78.1417H84.749C85.1108 78.1417 85.4068 77.8474 85.4068 77.4878V73.565C85.4068 73.2054 85.1108 72.9112 84.749 72.9112ZM42.1145 50.5509C42.0405 49.8399 41.9993 49.1207 41.9993 48.3933C41.9993 47.0939 42.1227 45.8271 42.3529 44.5931C42.4105 44.2988 42.2542 43.9965 41.9829 43.8739C40.8646 43.3753 39.8368 42.6888 38.9487 41.8225C37.9023 40.8141 37.0789 39.5999 36.531 38.2575C35.9831 36.9151 35.7227 35.4739 35.7666 34.0259C35.8406 31.4024 36.9013 28.9098 38.7514 27.0301C40.7824 24.9624 43.5123 23.8346 46.4149 23.8673C49.0379 23.8918 51.5705 24.897 53.4864 26.6787C54.136 27.2834 54.6951 27.9536 55.1638 28.6728C55.3283 28.9261 55.649 29.0324 55.9285 28.9343C57.3757 28.4358 58.9051 28.0844 60.4757 27.9209C60.9361 27.8719 61.1993 27.3815 60.9937 26.9729C58.3213 21.7179 52.8615 18.0892 46.5465 17.9912C37.4358 17.8522 29.838 25.2812 29.838 34.3364C29.838 39.4688 32.2144 44.0455 35.9392 47.0448C33.3244 48.2462 30.9152 49.9053 28.8266 51.9811C24.3206 56.4515 21.7716 62.3522 21.6071 68.6532C21.6049 68.7405 21.6203 68.8272 21.6524 68.9085C21.6845 68.9897 21.7326 69.0637 21.7939 69.1262C21.8552 69.1886 21.9285 69.2382 22.0094 69.2721C22.0903 69.306 22.1772 69.3234 22.265 69.3234H26.8779C27.2314 69.3234 27.5275 69.0455 27.5357 68.6941C27.6919 63.954 29.6242 59.5163 33.0202 56.1491C35.4377 53.7464 38.3978 52.0792 41.6293 51.2701C41.9418 51.1802 42.1556 50.8778 42.1145 50.5509ZM79.1576 48.3933C79.1576 39.4525 71.9298 32.187 62.9671 32.0481C53.8564 31.9091 46.2669 39.3381 46.2669 48.3933C46.2669 53.5257 48.6515 58.1024 52.3681 61.1017C49.7262 62.3189 47.3212 63.99 45.2637 66.038C40.7577 70.5084 38.2087 76.4091 38.0442 82.702C38.0421 82.7892 38.0574 82.876 38.0895 82.9572C38.1216 83.0384 38.1697 83.1124 38.231 83.1749C38.2923 83.2373 38.3656 83.287 38.4465 83.3208C38.5274 83.3547 38.6143 83.3722 38.7021 83.3721H43.3068C43.6603 83.3721 43.9563 83.0943 43.9646 82.7428C44.1208 78.0027 46.0531 73.565 49.4491 70.1979C52.9931 66.6755 57.6964 64.7386 62.7122 64.7386C71.7901 64.7386 79.1576 57.4241 79.1576 48.3933ZM70.1538 55.7895C68.1639 57.7673 65.5244 58.8543 62.7122 58.8543C59.9001 58.8543 57.2606 57.7673 55.2707 55.7895C54.2777 54.8078 53.4932 53.6378 52.9635 52.3491C52.4338 51.0604 52.1699 49.6791 52.1872 48.2871C52.2119 45.6065 53.2891 43.0157 55.1721 41.0952C57.1455 39.0847 59.785 37.9651 62.6053 37.9324C65.3928 37.9078 68.0981 38.9866 70.088 40.9235C72.1272 42.9095 73.2455 45.5656 73.2455 48.3933C73.2373 51.1884 72.1436 53.8118 70.1538 55.7895Z"
                        fill="white" />
                </svg>
                Add User
            </button> --}}
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  align-items-end justify-content-end" id="navbarScroll">



                <button class="btn btn-light buttonLog" type="submit">
                    <svg width="40" height="34" viewBox="0 0 146 145" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M72.9545 0C58.6154 0 44.5983 4.25205 32.6757 12.2184C20.7532 20.1848 11.4607 31.5078 5.97335 44.7554C0.486002 58.003 -0.949735 72.5803 1.84769 86.644C4.64511 100.708 11.5501 113.626 21.6894 123.765C31.8286 133.904 44.7469 140.809 58.8105 143.607C72.8742 146.404 87.4515 144.968 100.699 139.481C113.947 133.994 125.27 124.701 133.236 112.778C141.202 100.856 145.454 86.8392 145.454 72.4999C145.434 53.2781 137.789 34.8496 124.197 21.2577C110.605 7.66584 92.1761 0.0207898 72.9545 0ZM72.9545 132.917C61.0053 132.917 49.3243 129.373 39.3889 122.735C29.4534 116.096 21.7097 106.66 17.1369 95.6201C12.5641 84.5808 11.3677 72.4329 13.6988 60.7132C16.03 48.9936 21.7841 38.2284 30.2335 29.7789C38.683 21.3295 49.4482 15.5754 61.1678 13.2442C72.8875 10.9131 85.0354 12.1095 96.0747 16.6822C107.115 21.255 116.551 28.9988 123.189 38.9343C129.828 48.8697 133.371 60.5507 133.371 72.4999C133.354 88.5182 126.983 103.875 115.656 115.202C104.329 126.528 88.9728 132.899 72.9545 132.917Z"
                            fill="currentColor" />
                        <path
                            d="M33.4059 96.309L40.0034 106.435C49.9559 100.109 61.5189 96.7826 73.3116 96.8521C85.1038 96.9222 96.627 100.385 106.504 106.827L113.222 96.7863C101.422 88.911 87.5718 84.6679 73.3854 84.5833C59.1992 84.4987 45.2992 88.575 33.4059 96.309Z"
                            fill="currentColor" />
                        <path
                            d="M100.142 57.3945C100.142 52.0174 98.5479 46.7609 95.5603 42.29C92.5727 37.819 88.3266 34.3343 83.3591 32.2765C78.3911 30.2188 72.9246 29.6804 67.6508 30.7295C62.3771 31.7785 57.5326 34.3678 53.7304 38.1701C49.9281 41.9723 47.3388 46.8166 46.2898 52.0905C45.2407 57.3644 45.7791 62.8308 47.8369 67.7988C49.8946 72.7663 53.3793 77.0124 57.8502 80C62.3215 82.9876 67.5777 84.582 72.9548 84.582C80.1631 84.5741 87.0736 81.7067 92.1703 76.61C97.267 71.5133 100.134 64.6028 100.142 57.3945ZM72.9548 72.4987C69.9672 72.4987 67.0473 71.6129 64.5636 69.9533C62.0798 68.2937 60.1436 65.9344 59.0004 63.1746C57.8572 60.4147 57.5581 57.3778 58.1409 54.4479C58.7237 51.5179 60.1622 48.8266 62.2744 46.7142C64.3871 44.6019 67.0781 43.1634 70.0083 42.5806C72.9379 41.9978 75.975 42.2969 78.7349 43.4401C81.4947 44.5833 83.854 46.5192 85.5136 49.0031C87.1732 51.487 88.059 54.4072 88.059 57.3945C88.059 59.378 87.6681 61.3421 86.9092 63.1746C86.1504 65.007 85.0375 66.6721 83.6353 68.075C82.2324 69.4772 80.5673 70.5901 78.7349 71.3489C76.9024 72.1078 74.9383 72.4987 72.9548 72.4987Z"
                            fill="currentColor" />
                    </svg>
                    username
                </button>
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST">
                    @csrf
                    <button class="btn btn-light buttonLog" type="submit" onclick="location.href='Techlogout';"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <svg width="40" height="34" viewBox="0 0 51 53" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M34.332 35.3386L37.9985 39.005L51 26.0035L37.9985 13.002L34.332 16.6684L41.0408 23.4032H15.8959V28.6038H41.0408L34.332 35.3386Z"
                                fill="currentColor" />
                            <path
                                d="M5.49468 0H28.8974C30.2767 0 31.5995 0.54792 32.5748 1.52322C33.5501 2.49853 34.0981 3.82133 34.0981 5.20061V10.4012H28.8974V5.20061H5.49468V46.8055H28.8974V41.6049H34.0981V46.8055C34.0981 48.1848 33.5501 49.5076 32.5748 50.4829C31.5995 51.4582 30.2767 52.0061 28.8974 52.0061H5.49468C4.11539 52.0061 2.7926 51.4582 1.81729 50.4829C0.841987 49.5076 0.294067 48.1848 0.294067 46.8055V5.20061C0.294067 3.82133 0.841987 2.49853 1.81729 1.52322C2.7926 0.54792 4.11539 0 5.49468 0V0Z"
                                fill="currentColor" />
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

