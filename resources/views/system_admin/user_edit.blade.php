
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
                        < Add a User</h4>
                </div>
            </div>
<<<<<<< HEAD






=======
>>>>>>> 60a0eda7c621c17ac457d55e2c8be2179ea21c75
                        <!-- <div class="container"> -->

                        <form action="{{url ('update-user/'.$users->id)}}" method="post">
                       
                            @csrf
                            @method('PUT')
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
                                        <option value="Region c">Region C</option>
                                        <option value="Region D">Region D</option>
                                        <option value="Region A">Region E</option>
                                        <option value="Region B">Region F</option>
                                        <option value="Region c">Region G</option>
                                      
                                        <span class="text-danger">@error('region') {{$message}} @enderror</span>
                                    </select>
                                </div>



                                <div class="col-md-5 mb-4">
                                    <label for="inputtype" class="form-label">User Role:</label>
                                    <select  class="form-control" name="type">
                                        <option value="Admin">Admin</option>
                                        <option value="Management">Management</option>
                                        <option value="Technician">Technician</option>
                                        <option value="System Admin">System Admin</option>
                                        <span class="text-danger">@error('type') {{$message}} @enderror</span>
                                    </select>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                <label for="namr" class="form-label">Full Name</label>
                                <input type="text" class="form-control" placeholder="name" name="name" value="{{$users->name}}">
                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                            </div>



                            <div class="col-md-12 mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="phone" name="phone" value="{{$users->phone}}">
                                    <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="text" class="form-control" placeholder="email" name="email" value="{{$users->email}}">
                                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="password" class="password">Password</label>
                                    <input type="password" class="form-control" placeholder="password" name="password">
                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
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

<<<<<<< HEAD
=======
              

              
>>>>>>> 60a0eda7c621c17ac457d55e2c8be2179ea21c75
