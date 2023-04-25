@extends('layouts.admin')

@section('title', 'Metrowired')
@section('meta')
    <meta name="description" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/system_admin_dashboard.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

@endsection

@section('style')
    <style>
        /* */
    </style>
@endsection
<link rel="stylesheet" href="{{ asset('assets/css/site.css') }}">
@section('content')
    <main class="my-auto">
        <div class="container">
            <div class=" form_wrapper custom_scrollbar">
                <div class="row">
                    <div class="col-sm-6 p-2">
                        <h3><b>Tickets Logged</b>
                            <h3>
                    </div>
                    <div class="col-sm-6 p-2">
                        <div class="d-flex justify-content-sm-end justify-content-lg-end">
                            <button type="button" onclick="window.location='{{ url('/ticket') }}'" class="btnLogin">
                                <svg width="40" height="34" viewBox="0 0 107 107" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="53.5381" cy="53.4332" r="50.1665" stroke="currentColor"
                                        stroke-width="6" />
                                    <path
                                        d="M53.032 80.7769V58.2833C53.032 56.8629 53.5962 55.5007 54.6006 54.4964C55.605 53.492 56.9672 52.9277 58.3876 52.9277C59.808 52.9277 61.1702 53.492 62.1746 54.4964C63.1789 55.5007 63.7432 56.8629 63.7432 58.2833V70.0657H72.3122C74.5848 70.0657 76.7643 70.9685 78.3713 72.5755C79.9783 74.1825 80.8811 76.362 80.8811 78.6346V80.7769"
                                        stroke="currentColor" stroke-width="6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M27.3249 29.3616C28.508 29.3616 29.4671 28.4025 29.4671 27.2194C29.4671 26.0363 28.508 25.0771 27.3249 25.0771C26.1417 25.0771 25.1826 26.0363 25.1826 27.2194C25.1826 28.4025 26.1417 29.3616 27.3249 29.3616Z"
                                        fill="currentColor" stroke="currentColor" stroke-width="6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M44.463 29.3616C45.6462 29.3616 46.6053 28.4025 46.6053 27.2194C46.6053 26.0363 45.6462 25.0771 44.463 25.0771C43.2799 25.0771 42.3208 26.0363 42.3208 27.2194C42.3208 28.4025 43.2799 29.3616 44.463 29.3616Z"
                                        fill="currentColor" stroke="currentColor" stroke-width="6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M61.6005 29.3616C62.7836 29.3616 63.7427 28.4025 63.7427 27.2194C63.7427 26.0363 62.7836 25.0771 61.6005 25.0771C60.4174 25.0771 59.4583 26.0363 59.4583 27.2194C59.4583 28.4025 60.4174 29.3616 61.6005 29.3616Z"
                                        fill="currentColor" stroke="currentColor" stroke-width="6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M27.3249 44.3567C28.508 44.3567 29.4671 43.3976 29.4671 42.2145C29.4671 41.0314 28.508 40.0723 27.3249 40.0723C26.1417 40.0723 25.1826 41.0314 25.1826 42.2145C25.1826 43.3976 26.1417 44.3567 27.3249 44.3567Z"
                                        fill="currentColor" stroke="currentColor" stroke-width="6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M44.463 44.3567C45.6462 44.3567 46.6053 43.3976 46.6053 42.2145C46.6053 41.0314 45.6462 40.0723 44.463 40.0723C43.2799 40.0723 42.3208 41.0314 42.3208 42.2145C42.3208 43.3976 43.2799 44.3567 44.463 44.3567Z"
                                        fill="currentColor" stroke="currentColor" stroke-width="6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M61.6005 44.3567C62.7836 44.3567 63.7427 43.3976 63.7427 42.2145C63.7427 41.0314 62.7836 40.0723 61.6005 40.0723C60.4174 40.0723 59.4583 41.0314 59.4583 42.2145C59.4583 43.3976 60.4174 44.3567 61.6005 44.3567Z"
                                        fill="currentColor" stroke="currentColor" stroke-width="6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M27.3249 59.3548C28.508 59.3548 29.4671 58.3957 29.4671 57.2126C29.4671 56.0294 28.508 55.0703 27.3249 55.0703C26.1417 55.0703 25.1826 56.0294 25.1826 57.2126C25.1826 58.3957 26.1417 59.3548 27.3249 59.3548Z"
                                        fill="currentColor" stroke="currentColor" stroke-width="6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M44.463 59.3548C43.8949 59.3548 43.35 59.1291 42.9482 58.7273C42.5465 58.3256 42.3208 57.7807 42.3208 57.2126C42.3208 56.6444 42.5465 56.0995 42.9482 55.6978C43.35 55.296 43.8949 55.0703 44.463 55.0703V59.3548Z"
                                        fill="currentColor" stroke="currentColor" stroke-width="6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>Log a ticket
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" class="text-center">Ticket Type</th>
                            <th scope="col" class="text-center">Ticket Number</th>
                            <th scope="col" class="text-center">Network Type</th>
                            <th scope="col" class="text-center">Number of Points(Break-Fix)</th>
                            <th scope="col" class="text-center">Call Logged</th>
                            <th scope="col" class="text-center">Affected User</th>
                            <th scope="col" class="text-center">Status</th>
                            <th scope="col" class="text-center">Region</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if (is_countable($tickets) > 0)
                            @foreach ($tickets as $ticket)
                                <tr>

                                    <td class="text-center">{{ $ticket['ticket_number'] }}</td>
                                    <td class="table-secondary text-center">{{ $ticket['ticket_number'] }}</td>
                                    <td class="text-center">{{ $ticket['network_type'] }}</td>
                                    <td class="table-secondary text-center">{{ $ticket['fixes'] }}</td>
                                    <td class=" text-center">{{ $ticket['created_at'] }}</td>
                                    <td class="table-secondary text-center">{{ $ticket['affected_user'] }}</td>
                                    <td class="text-center">Logged</td>
                                    <td class="table-secondary text-center">{{ $ticket['region'] }}</td>


                                </tr>
                                @endforeach
                            @else
                                <h4>There are no users to display</h4>
                            @endif

                    </tbody>
                    <div>
                </table>
            </div>
        </div>
    </main>
@endsection
