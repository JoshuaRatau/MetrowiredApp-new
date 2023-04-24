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
                    <div class="col-sm-6 p-2"><h3><b>Tickets Logged</b>
                                    <h3></div>
                    <div class="col-sm-6 p-2">
                        <div class="d-flex justify-content-sm-end justify-content-lg-end">
                                <button type="button" onclick="window.location='{{ url('/ticket') }}'"
                                        class="btnLogin"> <img
                                            src={{ asset('assets/img/web/LogTicket.svg') }} width="35"
                                            height="34">Log a ticket</button>
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
