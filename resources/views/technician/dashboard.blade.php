@extends('layouts.technician')

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

@endsection

@section('style')
    <style>
        /* */
    </style>
@endsection
<link rel="stylesheet" href="{{ asset('assets/css/site.css') }}">
@section('content')



<main>
        <div class="container">
            <div class="row col-sm-12 myHeader">
                <div class="row col-sm-6">
                    <div class="text-start">
                        <h4>My Tickets</h4>
                    </div>
                </div>
                <div class="row col-sm-6">
                    <div class="text-start text-sm-end">
                        <button type="button" class="btn btn-primary buttonNew">
                            <span class="badge badge-light">9</span> New
                        </button>
                    </div>
                </div>

            </div>

            <div class="d-flex align-items-center justify-content-center">
  
                 <div class="card">
                    <div class="card-body">
 @if (is_countable($tickets) && count($tickets) >0)

@foreach ($tickets as $ticket) 

               
                      <div class="row">
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4>{{$ticket['description']}}</h4>
                                    </div>
                                    <div class=" col-sm-3">
                                        <p>{{$ticket['ticket_number']}}</p>
                                    </div>
                                    <div class=" col-sm-3">
                                        <p>{{$ticket['affected_user']}}</p>
                                    </div>
                                    <div class=" col-sm-3">
                                        <p> {{$ticket['region']}}</p>
                                    </div>
                                    <div class=" col-sm-3">
                                        <p>LAN</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-2 d-flex align-items-center justify-content-center">
                                <div class="text-end">
                                <!-- <button type="button" onclick="window.href="technician/dashboard/{{$ticket->id}}"  class="btn btn-primary buttonView">
                                       View
                                    </button> -->

                                    <a href="{{ url('/technician/ticket_details', $ticket->id) }}">View Ticket</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        @endforeach
@else

<h1>There are no tickets to display</h1>
@endif
<div>            
        </div>
    </main>

@endsection
