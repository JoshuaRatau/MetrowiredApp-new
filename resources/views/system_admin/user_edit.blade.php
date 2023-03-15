
@extends('layouts.addUser')


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
    <link rel="stylesheet" href="{{ asset('assets/css/system_admin_dashboard.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <main>
        <div class="container">
            <div class="row col-sm-12 mb-6">
                <div class="text-start">
                    <h4 class="backText">
                        < Edit User User</h4>
                </div>
            </div>
          

     
            
                 
                     
                        <!-- <div class="container"> -->

                        <form action="{{route('user_edit', ['user'=>$user->id])}}" method="post">
                            <!-- @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif

                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif -->
                            @csrf
                            <div class="d-flex align-items-center justify-content-center">
                            <form class="row mb-3 logForm">
                    <div class="row">
                    {{-- form 1 --}}
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <label for="inputState" class="form-label">Region:</label>
                                    <select  class="form-control" name="region">
                                        <option selected>All</option>
                                        <option value="Region A">Region A</option>
                                        <option value="Region B">Region B</option>
                                        <option value="Region C">Region C</option>
                                        <option value="Region D">Region D</option>
                                        <option value="Region E">Region E</option>
                                        <option value="Region F">Region F</option>
                                        <option value="Region G">Region G</option>
                                    </select>
                                </div>  



                                <div class="col-md-5 mb-4">
                                    <label for="inputtype" class="form-label">User Role:</label>
                                    <select  class="form-control" name="type">
                                         <option value="all">All</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Managemnt">Management</option>
                                        <option value="Techician">Technician</option>
                                        <option value="System Admin">System Admin</option>
                                    </select>
                                    </div>
                            
                                   
                                                    
                                    <div class="col-md-12 mb-3">
                                <label for="namr" class="form-label">Full Name</label>
                                <input type="text" class="form-control" placeholder="name" name="name" value="">
                            </div>


                         
                            <div class="col-md-12 mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="phone" name="phone" value="">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="text" class="form-control" placeholder="email" name="email" value="">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" value="">
                                </div>
                                <div class="col-md-8 mb-3">
                                <button type="button" class="btn btn-primary buttonGenerate">Generate</button>
                                </div>

                            </div>
                        
                        <div class="col-sm-5">
                            <div class="mb-4" id="container">
                                <button  class="btn btn-primary buttonLog" type="submit">Edit</button>
                            
                        
                        <div class="col-sm-5">
                            <div class="mb-4" id="container">
                                <button type="button" class="btn btn-primary buttonCancel">Cancel</button>

                            </div>
                            </div>
                    </div>
                   
                </form>

                </main>

@endsection

              