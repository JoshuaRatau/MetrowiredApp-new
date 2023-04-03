@extends('layouts.technician')


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



        <main>
            <div class="container">
                <div class="col-sm-12">
                    <div class="backText" onclick="window.location='{{ url('techdashboard') }}'">
                        <span class="mx-2">
                            <img src="{{ asset('assets/img/web/chevron-left.svg') }}" alt="" srcset="">
                        </span>
                        {{$ticket['title']}}
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <br>
                                        <h4>SR603127</h4>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <br>
                                        <h6>Affected User</h6>
                                        <p>{{$ticket['affected_user']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <br>
                                        <h6>Contact Method</h6>
                                        <p>{{$ticket['contact']}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">

                                        <!-- <label for="inputState" class="form-label"><b>Status:</b></label> -->
                                        <!-- <select id="inputState" class="form-select">
                                            <option selected>All</option>
                                            <option value="1">Active</option>
                                            <option value="2">Started</option>
                                            <option value="2">User not available</option>
                                            <option value="2">Complete</option>
                                        </select> -->

    <form method="POST" action="{{ url('ticket-details/'. $ticket->id) }}">
    {{ csrf_field() }}
{{ method_field('put') }}
    <div class="form-group">
        <label for="status">Progress Status</label>
        <select name="status" id="status" class="form-control">
            <option value="Started" {{ $ticket->status == 'Started' ? 'selected' : '' }}>Started</option>
            <option value="User not available" {{ $ticket->status == 'User not available' ? 'selected' : '' }}>User not available</option>
            <option value="Complete" {{ $ticket->status == 'Complete' ? 'selected' : '' }}>Complete</option>
        </select>
    </div>
    





                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">

                                        <h6>Alternate Contacts</h6>
                                        <p>{{$ticket['alternate_contact']}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <br>
                                        <h6>Date Logged</h6>
                                        <p>{{$ticket->created_at->format('Y-m-d')}}</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>
                <div class="d-flex align-items-start justify-content-start">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="map-Text">
                                <br>
                                <h6>Location</h6>
                                <p>{{$ticket['location']}}</p>

                                <button type="button" class="btn btn-primary map">View Map</button>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="map-Text">
                                 <br>
                                <h6>Description</h6>
                                <p>{{$ticket['description']}}</p>
<br>
                            </div>
                        </div>
                         <div class="col-md-10">
                            <div class="map-Text">
                        
                                    <button type="submit"
 class="btn btn-primary map">Update</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </main>
    @endsection