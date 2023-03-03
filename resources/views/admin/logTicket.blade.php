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
                <div class="text-start">
                    <h4 class="backText">
                        < Log a ticket</h4>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center">

                <form class="row mb-3 logForm">
                    <div class="row">
                        {{-- form 1 --}}
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <label for="inputState" class="form-label">Region:</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>All</option>
                                        <option value="1">Region A</option>
                                        <option value="2">Region B</option>
                                    </select>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <label for="inputState" class="form-label">Network Type:</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>All</option>
                                        <option value="1">LAN</option>
                                        <option value="2">WAN</option>
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="col-sm-12 mb-3">
                                <label for="inputAddress2" class="form-label">Affected User</label>
                                <input type="text" class="form-control" id="inputAddress2"
                                    placeholder="Apartment, studio, or floor">
                            </div> --}}
                            <div class="col-md-12 mb-3">
                                <label for="inputAddress2" class="form-label">Affected User</label>
                                <input type="text" class="form-control" id="inputAddress2"
                                    placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="inputAddress2" class="form-label">Ticket Number</label>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">INC</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">SR</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="inputAddress2">
                                    </div>

                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="inputAddress2" class="form-label">Contact Details</label>
                                    <input type="text" class="form-control" id="inputAddress2">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="inputAddress2" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="inputAddress2">
                                </div>
                            </div>
                        </div>
                        {{-- form2 --}}
                        <div class="col-sm-6">
                            <div class="col-md-6 mb-4">
                                <label for="inputState" class="form-label">State</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="inputCity" class="form-label">City</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            </div>
                        </div>

                        <div class="col-sm-5">
                            <div class="mb-4" id="container">
                                <button type="button" onclick="window.location='{{ url("admin/dashboard") }}'" class="btn btn-primary buttonLog">Log</button>

                            </div>

                        </div>
                        <div class="col-sm-5">
                            <div class="mb-4" id="container">
                                <button type="button" class="btn btn-primary buttonCancel">Cancel</button>

                            </div>

                        </div>
                    </div>
                </form>



                {{-- <form class="row mb-3">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <label for="inputState" class="form-label">Region:</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>All</option>
                                        <option value="1">Region A</option>
                                        <option value="2">Region B</option>
                                    </select>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <label for="inputState" class="form-label">Network Type:</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>All</option>
                                        <option value="1">LAN</option>
                                        <option value="2">WAN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="inputAddress2" class="form-label">Affected User</label>
                                <input type="text" class="form-control" id="inputAddress2"
                                    placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="inputAddress2" class="form-label">Ticket Number</label>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">INC</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">SR</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="inputAddress2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="inputAddress2" class="form-label">Contact Details</label>
                                <input type="text" class="form-control" id="inputAddress2">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="inputAddress2" class="form-label">Contact Details</label>
                                <input type="text" class="form-control" id="inputAddress2">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="col-md-6 mb-4">
                                <label for="inputState" class="form-label">State</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="inputCity" class="form-label">City</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 mb-6">

                        </div>
                    </div>

                </form> --}}


            </div>
        </div>
        </div>
    </main>

@endsection
