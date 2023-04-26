@extends('layouts.system_admin')

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
<link rel="stylesheet" href="{{ asset('assets/css/system_admin_dashboard.css') }}">
@section('content')

    <main>
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="backText" onclick="window.location='{{ url('sysadmindashboard') }}'">
                            <span class="mx-2">
                                <img src="{{ asset('assets/img/web/chevron-left.svg') }}" alt="" srcset="">
                            </span>
                            Add a User
                        </div>
                    </div>
                    <div class="col-md-12">

                        <form action="{{ route('register-user') }}" method="post" class="logForm">

                            @csrf
                            <div class="row">
                                <div class="col-sm-5 mb-3">
                                    <label for="inputState" class="form-label">Region:</label>
                                    <select class="form-control" name="region">
                                        <option selected>All</option>
                                        <option value="Region A">Region A</option>
                                        <option value="Region B">Region B</option>
                                        <option value="Region c">Region C</option>
                                        <option value="Region D">Region D</option>
                                        <option value="Region A">Region E</option>
                                        <option value="Region B">Region F</option>
                                        <option value="Region c">Region G</option>

                                        <span class="text-danger">
                                            @error('region')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </select>
                                </div>
                                <div class="col-sm-7 mb-3">
                                    <label for="inputtype" class="form-label">User Role:</label>
                                    <select class="form-control" name="type">
                                        <option value="Admin">Admin</option>
                                        <option value="Management">Management</option>
                                        <option value="Technician">Technician</option>
                                        <option value="System Admin">System Admin</option>
                                        <span class="text-danger">
                                            @error('type')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </select>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="namr" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" placeholder="name" name="name"
                                        value="{{ old('name ') }}">
                                    <span class="text-danger"> @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="phone" name="phone"
                                        value="{{ old('phone') }}">
                                    <span class="text-danger">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="text" class="form-control" placeholder="email" name="email"
                                        value="{{ old('email') }}">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="password" class="password">Password</label>
                                    <input type="password" id="password" class="form-control" placeholder="password"
                                        name="password" value="">
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-sm-12 mb-3 text-end">
                                    <button type="button" id="generate-password"
                                        class="btn btn-primary buttonGenerate">Generate</button>
                                </div>
                                <div class="row p-lg-3 p-sm-1">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btnLog" data-bs-toggle="modal"
                                            data-bs-target="#addModal">Add</button>
                                        <button type="button" class="btn btn-primary buttonCancel" data-bs-toggle="modal"
                                            data-bs-target="#cancelModal">Cancel</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>

                {{-- User Modal --}}
                <div class="modal fade" id="addModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                    tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered" role="document">

                        <div class="modal-content">
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="mt-3 pt-3 d-flex align-items-center justify-content-center">
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <h3>User Created</h3>
                                        </div>
                                        <div class="col-sm-12 text-center">
                                            <p>This user has been created.Login information have been<br>sent to
                                                user email address</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 mx-auto d-flex align-items-center justify-content-center">
                                    <div class="text-center">
                                        <img src={{ asset('assets/img/web/check_circle_outline_black_24dp.svg') }}
                                            class="img-fluid logo" alt="logo" width="150" height="100">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                {{-- Cancel Modal --}}
                <div class="modal fade" id="cancelModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                    tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered" role="document">

                        <div class="modal-content">
                            <!-- Modal Header -->
                            {{-- <div class="modal-header">
                                <h4 class="modal-title">Modal Heading</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div> --}}

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="mt-3 pt-3 d-flex align-items-center justify-content-center text-center">
                                    <h3>Are you sure you want <br>to cancel</h3>
                                </div>
                                <div class="mt-3 pt-3 d-flex align-items-center justify-content-center">

                                    <a class="btn btn-dark" onclick="window.location='{{ url('/sysadmindashboard') }}'"
                                        data-bs-toggle="modal" data-bs-target="#sucessModal" data-bs-dismiss="modal"
                                        id="btndelete">Yes</a>

                                    <a class="btn btn-outline-dark" data-bs-dismiss="modal" href="#"
                                        role="button" id="btndelete">No</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>


        </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#generate-password').click(function() {
                    // Generate a random password
                    var password = generatePassword();

                    // Set the password field value
                    $('#password').val(password);
                });
            });

            function generatePassword() {
                // Define the characters to use in the password
                var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+{}|:<>?-=[];,./';

                // Generate a random password
                var password = '';
                for (var i = 0; i < 12; i++) {
                    password += chars.charAt(Math.floor(Math.random() * chars.length));
                }

                return password;
            }
            $(document).ready(function() {
                $('#successModal').modal('show');
                setTimeout(function() {
                    $('#successModal').modal('close'); // Redirect to the desired page

                }, 6000); // Wait for 3 seconds
                //  window.location='{{ url('/sysadmindashboard') }}';
                $('#successModal').on('hidden.bs.modal', function() {
                    window.location = '{{ url('/sysadmindashboard') }}';
                });
            });
        </script>


    </main>
@endsection
