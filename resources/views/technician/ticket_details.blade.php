@extends('layouts.tech')

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
        <link rel="stylesheet" href="{{ asset('assets/css/ticket_details.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrq5_Dzl0pztNFIuuv04ls8DqEBD8_DFk"></script>




        <main>
            <div class="container">
                <div class="col-sm-12">
                    <div class="backText" onclick="window.location='{{ url('techdashboard') }}'">
                        <span class="mx-2">
                            <img src="{{ asset('assets/img/web/chevron-left.svg') }}" alt="" srcset="">
                        </span>
                       
                        {{ $ticket->title }}
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-center">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <br>
                                                <h4>{{ $ticket['ticket_number'] }}</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <br>
                                                <h6>Affected User</h6>
                                                <p>{{ $ticket['affected_user'] }}</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <br>
                                                <h6>Contact Method</h6>
                                                <p>{{ $ticket['contact'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-3">

                                                <label for="inputState" class="form-label"><b>Status:</b></label>
                                                <form method="POST" action="{{ url('ticket-details/' . $ticket->id) }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('put') }}
                                                    <div class="form-group">
                                                        <select name="status" id="status" class="form-control">
                                                            <option value="Started"
                                                                {{ $ticket->status == 'Started' ? 'selected' : '' }}>
                                                                Started</option>
                                                            <option value="User not available"
                                                                {{ $ticket->status == 'User not available' ? 'selected' : '' }}>
                                                                User not available</option>
                                                            <option value="Complete"
                                                                {{ $ticket->status == 'Complete' ? 'selected' : '' }}>
                                                                Complete</option>
                                                        </select>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">

                                                <h6>Alternate Contacts</h6>
                                                <p>{{ $ticket['alternate_contact'] }}</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <br>
                                                <h6>Date Logged</h6>
                                                <p id="location-input">{{ $ticket->created_at->format('Y-m-d') }}</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-12">

                                    <div class="row">
                                        <div class="col-sm-10">
                                        
                                                <br>
                                                <h6>Location</h6>
                                                <p id="location">{{ $ticket['location'] }}</p>

                                             
                                                <button onclick="location.href="{{ route('map.showmap') }}" type="submit" class="btn btn-primary map">View Map</button>
                                                
                                            </div>
                                            

                                        </div>
                                        <div class="col-sm-10">
                                            <div class="map-Text"> 
                                                <br>
                                                <h6>Description</h6>
                                                <p>{{ $ticket['description'] }}</p>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <button type="submit"

                                                    class="btn btn-primary map" >Update</button>
                                                  
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>


                </div>
               
            </div>




        </main>
        <script>
document.getElementById('map-button').addEventListener('click', function() {
    var mapOptions = {
        center: { lat: 37.7749, lng: -122.4194 }, // Set the center of the map
        zoom: 12 // Set the zoom level
    };
    var map = new google.maps.Map(document.getElementById('map'), mapOptions); // Create the map
});
</script>

@endsection
