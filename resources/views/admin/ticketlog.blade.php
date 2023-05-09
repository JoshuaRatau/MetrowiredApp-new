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
            <div class="row col-sm-12 mb-6">
                <div class="text-start" onclick="window.location='{{ url('/admindashboard') }}'">

                    <h4 class="backText"onclick="window.location='{{ url('/admindashboard') }}'">
                        <span class="mx-2">
                            <img src="{{ asset('assets/img/web/chevron-left.svg') }}" alt="" srcset="">
                        </span>
                        Log a ticket
                    </h4>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center">

                <form method="POST" action="{{ route('register-ticket') }}" class="row mb-3 logForm">
                    @if (Session::has('success'))
                        <div class="modal fade" id="success-modal" aria-hidden="true"
                            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered" role="document">

                                <div class="modal-content">


                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="mt-3 pt-3 d-flex align-items-center justify-content-center">
                                            <div class="row">
                                                <div class="col-sm-12 text-center">
                                                    <h3>Ticket Logged</h3>
                                                </div>
                                                <div class="col-sm-12 text-center">
                                                    <p>{{ Session::get('success') }}</p>
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
                        <script>
                            $(document).ready(function() {
                                $('#success-modal').modal('show');
                                setTimeout(function() {
                                    window.location.href = "{{ url('/admindashboard') }}";
                                }, 5000);
                            });
                        </script>
                    @endif
                    @if (Session::has('fail'))
                        <div class="modal fade" id="fail-modal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                            tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered" role="document">

                                <div class="modal-content">


                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <div class="mt-3 pt-3 d-flex align-items-center justify-content-center">
                                            <div class="row">
                                                <div class="col-sm-12 text-center">
                                                    <h3>Ticket Log Failed</h3>
                                                </div>
                                                <div class="col-sm-12 text-center">
                                                    <p>{{ Session::get('fail') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mx-auto d-flex align-items-center justify-content-center">
                                            <div class="text-center">
                                                <img src={{ asset('assets/img/web/x-circle.svg') }} class="img-fluid logo"
                                                    alt="logo" width="150" height="100">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <script>
                            $(document).ready(function() {
                                $('#fail-modal').modal('show');
                                setTimeout(function() {
                                    window.location.href = "{{ url('/ticket') }}";
                                }, 5000);
                            });
                        </script>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif

                    @if (Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                    @endif
                    @csrf
                    <div class="row">
                        {{-- form 1 --}}
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <label for="inputState" class="form-label">Region:</label>
                                    <select class="form-select" name="region">
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
                                    <label for="inputState" class="form-label">Network Type:</label>
                                    <select id="network_type" class="form-select" name="network_type">
                                        <option selected>All</option>
                                        <option value="LAN">LAN</option>
                                        <option value="WAN">WAN</option>
                                        <option value="OTHER">OTHER</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="inputAddress2" class="form-label">Affected User</label>
                                <input type="text" id="inputAddress2" placeholder="name"
                                    class="form-control"name="affected_user">
                                <span class="text-danger">
                                    @error('affected_user')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="inputAddress2" class="form-label">Ticket Number</label>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="checkbox1"
                                                name="option1" value="INC">
                                            <label class="form-check-label" for="inlineCheckbox1">INC</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="checkbox2"
                                                name="option2" value="SR">
                                            <label class="form-check-label" for="inlineCheckbox1">SR</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" id="inputbox" class="form-control" name="ticket_number">
                                        <span class="text-danger">
                                            @error('ticket_number')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="inputAddress2" class="form-label">Contact Details</label>
                                    <input type="text" id="contact" class="form-control" name="contact">
                                    <span class="text-danger">
                                        @error('contact')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="inputAddress2" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                            </div>
                        </div>
                        {{-- form2 --}}
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-5 mb-4">
                                    <label for="inputState" class="form-label">Techician</label>
                                    <select name="assigned_to" id="assigned_to" class="form-select">
                                        <option value="">-- Select a technician --</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-7 mb-4">
                                    <label for="inputCity" class="form-label">Points & Break-Fixes:</label>
                                    <input type="text" class="form-control" id="fixes" name="fixes">
                                </div>
                            </div>

                            <div class="col-md-12 mb-4">
                                <label for="inputCity" class="form-label">Alternate Contact Details</label>
                                <input type="text" class="form-control" name="alternate_contact">
                                <span class="text-danger">
                                    @error('alternate_contact')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-6 mb-1">
                                        <label for="inputCity" class="form-label">Issue Description</label>
                                    </div>
                                    <div class="col-md-6 mb-1 text-end">
                                        <p class="text-end"> 250 character limit:</p>
                                    </div>
                                </div>
                                <textarea class="form-control" placeholder="Leave a comment here" name="description" id="description"
                                    rows="4" cols="53" maxlength="250" required></textarea>
                            </div>
                            <div class="col-md-12 mb-4">
                                <label for="inputAddress2" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location">
                                <span class="text-danger">
                                    @error('location')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary btnLog" data-toggle="modal"
                                    data-target="#successModal">Log</button>
                            <button type="button" class="btn btn-primary buttonCancel" data-bs-toggle="modal"
                                    data-bs-target="#cancelModal">Cancel</button>
                        </div>

                        <!-- {{-- <div class="col-sm-5">
                            <div class="p-3">
                                <button class="btn btn-primary buttonLog" type="submit" data-toggle="modal"
                                    >Log</button>

                            </div> -->

                        </div>
                        <div class="col-sm-5">
                            <div class="p-2">
                                <button type="button" class="btn btn-primary buttonCancel" data-bs-toggle="modal"
                                    data-bs-target="#cancelModal">Cancel</button>

                            </div>

                        </div> --}}
                    </div>

                </form>

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

                                    <a class="btn btn-dark" onclick="window.location='{{ url('/admindashboard') }}'"
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

            {{-- Sucess Modal  --}}

            <div class="modal fade" id="success-modal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                tabindex="-1">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-content">

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="mt-3 pt-3 d-flex align-items-center justify-content-center">
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <h3>Ticket Logged</h3>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <p>{{ Session::get('success') }}</p>
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

        </div>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            // When checkbox1 is clicked
            $('#checkbox1').click(function() {
                if ($(this).is(':checked')) {
                    // Set the inputbox value to checkbox1 value
                    $('#inputbox').val($(this).val());
                    // Uncheck checkbox2
                    $('#checkbox2').prop('checked', false);
                } else {
                    // If checkbox1 is unchecked, clear the inputbox value
                    $('#inputbox').val('');
                }
            });

            // When checkbox2 is clicked
            $('#checkbox2').click(function() {
                if ($(this).is(':checked')) {
                    // Set the inputbox value to checkbox2 value
                    $('#inputbox').val($(this).val());
                    // Uncheck checkbox1
                    $('#checkbox1').prop('checked', false);
                } else {
                    // If checkbox2 is unchecked, clear the inputbox value
                    $('#inputbox').val('');
                }
            });
        });

        //  $(document).ready(function() {
        //                         $('#success-modal').modal('close');
        //                         setTimeout(function() {
        //                             window.location.href = "{{ url('/admindashboard') }}";
        //                         }, 5000);
        //                     });
    </script>
@endsection
