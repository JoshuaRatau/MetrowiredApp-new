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
       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('assets/css/ticket_update.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">

        </script>


        <div class="container">

            <div class="backText" onclick="window.location='{{ url('technician/ticketDetails') }}'">
                <span class="mx-2">
                    <img src="{{ asset('assets/img/web/chevron-left.svg') }}" alt="" srcset="">
                </span>
                LAN-Dobsonville Fibre 8 Point
            </div>
        </div>





        <div class="container">
            <div class="d-flex align-items-center justify-content-center">
                <form class="row mb-3 logForm">

                    <div class="row">
                        <div class="col-sm-12">
                            <br>
                            <div class="center">
                                <h6>SR603127</h6>
                                <p>Completed</p>
                            </div>
                        </div>

                        <div class="col-sm-10">
                            <br>

                            <label for="inputState" class="form-label"><b>Response:</b></label>
                            <select id="inputState" class="form-select">
                                <option selected>Select a response</option>
                                <option value="1">Network points installed</option>
                                <option value="2">Network point repaired</option>
                                <option value="2">User not available_rescheduled</option>
                                <option value="2">Open day installation</option>
                                <option value="2">Cable issued 1m</option>
                                <option value="2">Cable issued 3m</option>
                                <option value="2">Cable issued 5m</option>
                                <option value="2">Cable issued 10m</option>
                                <option value="2">Duplicate call-call attended to on date</option>
                                <option value="2">Network point no longer required</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <br>
                            <input type="number" id="quantity" name="quantity" min="1" max="5">
                        </div>


                        <div class="col-sm-10">
                            <br>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label"><b>Comment:</b></label>
                                 <p class="text-end"> 250 character limit:</p>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" rows="6" cols="53" maxlength="250" ></textarea>

                            </div>


                        </div>
                        <div class="col-sm-10">
                            <div class="text-center">
                                <button type="button" onclick="window.location='{{ url('technician/dashboard') }}'"
                                class="btn btn-primary btnLogin">Complete</button>
                            </div>

                        </div>

                    </div>
                    <div class="row">

                    </div>
                </form>
            </div>




        </div>
    @endsection
