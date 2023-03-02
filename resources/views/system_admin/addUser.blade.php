
@extends('layouts.system_admin')



@section('style')
<style>
    body {
        /* background-image: url("{{asset('assets/img/web/Tenant_Web_Login.png')}}"); */
    }
</style>
@endsection

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
    <link rel="stylesheet" href="{{ asset('assets/css/system_admin_adduser.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>













<div class="container">

<div class="backText">
            <span class="mx-2">
                <img src="{{asset('assets/img/web/chevron-left.svg')}}" alt="" srcset="">
            </span>
            Add a User
        </div>


           
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <label for="inputState" class="form-label">Region:</label>
                                    <select id="inputState" class="form-select">
                                        <option selected></option>
                                        <option value="1">Region A</option>
                                        <option value="2">Region B</option>
                                        <option value="2">Region B</option>
                                    </select>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <label for="inputState" class="form-label">User Role:</label>
                                    <select id="inputState" class="form-select">
                                        <option selected></option>
                                        <option value="1">Technician</opt`ion>
                                        <option value="2">Admin</option>
                                        <option value="2">Management</option>
                                    </select>
                                </div>
                            </div>


    </div>


       
        <div class=" sm-3">

                <label class="form-label" for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>
        
            <div class=" mb-3">

                <label class="form-label" for="contact_number">Phone Number</label>
                <input class="form-control" type="text" name="contact_number" id="contact_number">
            </div>
            <div class=" mb-3">

                <label class="form-label" for="email_address">Email Address</label>
                <input class="form-control" type="text" name="email_address" id="email_address">
            </div>
            <div class="mb-3 row">
                <div class="col-lg-8 col-8 ">
                    <label class="form-label" for="passoword">Password</label>
                    <input class="form-control" type="password" name="password" id="pwd" >
                </div>
                
                <div class="col-4 col-lg-4 mt-4">
                <button type="button" onclick="window.location='{{ url("system/admin/dashboard") }}'" class="btn btn-primary btn-lg btnLogin">Generate</button>
                </div>
            </div>
            <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <label for="inputState" class="form-label">Region:</label>
                                    <select id="inputState" class="form-select">
                                        <option selected></option>
                                        <option value="1">Region A</option>
                                        <option value="2">Region B</option>
                                        <option value="2">Region B</option>
                                    </select>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <label for="inputState" class="form-label">User Role:</label>
                                 
                                </div>
                            </div>


    </div>


    </div>

    </form>
   
</div>

@endsection

</html>