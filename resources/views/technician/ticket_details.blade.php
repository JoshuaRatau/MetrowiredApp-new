
@extends('layouts.admin')


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


    <div class="container">

<div class="backText">
            <span class="mx-2">
                <img src="{{asset('assets/img/web/chevron-left.svg')}}" alt="" srcset="">
            </span>
            LAN-Dobsonville Fibre 8 Point
        </div>
</div>


           


<div class="container">
                        <div class="row">
                        <div class="col-lg-4">
            <br>
                                    <h4>SR603127</h4>
                                </div>
                                <div class="col-lg-3">
                                    <label for="inputState" class="form-label"><b>Status:</b></label>
                                    <select id="inputState" class="form-select">
                                        <option selected></option>
                                        <option value="1">Active</option>
                                        <option value="2">Started</option>
                                        <option value="2">User not available</option>
                                        <option value="2">Complete</option>
                                    </select>
                                </div>
                                <br>
                               
                            </div>


                            <div class="row">
                        <div class="col-lg-4">
            <br>
                                    <h6>Affected User</h6>
                                    <p>Phumi C.Dubula</p>
                                </div>
                                
                                <div class="col-lg-3">
                                    <br>
                                <h6>Alternate Contacts</h6>
                                <p>Phumi C.Dubula</p>
                                </div>
                            </div>


                            <div class="row">
                        <div class="col-lg-4">
            <br>
                                    <h6>Affected User</h6>
                                    <p>Phumi C.Dubula</p>
                                </div>
                                
                                <div class="col-lg-3">
                                    <br>
                                <h6>Alternate Contacts</h6>
                                <p>+27 82 385 9233</p>
                                </div>
                            </div>

                            

                            <div class="row">
                        <div class="col-lg-4">
            <br>
                                    <h6>Contact Method</h6>
                                    <p>+27 72 385 9233</p>
                                </div>
                                
                                <div class="col-lg-3">
                                    <br>
                                <h6>Date Logged</h6>
                                <p>02 Feb 2023</p>
                                </div>
                            </div>
                            <div class="row">
                        <div class="col-lg-4">
            <br>
                                    <h6>Location</h6>
                                    <p>39 Ungoye street Dobsonville Customer Service Center Dobsonville ext 4 soweto</p>
                                    
                                    <button type="button" class="map">View Map</button>
                                </div>
                                   
                                <div class="row">
                        <div class="col-lg-6">
                            <br>
                                <h6>Description</h6>
                                    <p>We are short of network points for connectivity. We need additional points</p>
                                    
                                </div>


                                <div class="">

                                <h3>Ticket Accepted</h2>
                                <button type="button" class="map">Update</button>
</div>
                             

@endsection

