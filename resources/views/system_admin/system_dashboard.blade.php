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
    <link rel="stylesheet" href="{{ asset('assets/css/system_admin_dashboard.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

@endsection

@section('style')
    <style>
        /* */
    </style>
@endsection
<link rel="stylesheet" href="{{ asset('assets/css/site.css') }}">
@section('content')
    <main class="my-auto">
        <div class="container">
            <div class=" form_wrapper custom_scrollbar">
                <div class="row d-flex justify-content-end">
                    <div class="col-sm-6">

                    </div>
                    <div class="row mt-2 pt-2 d-flex justify-content-between">


                        <div class="col-lg-3">


                            <div>
                                <h3><b>Active Users</b>
                                    <h3>
                            </div>

                        </div>




                    </div>



                </div>

            </div>


            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" class="text-center">Date Added</th>
                            <th scope="col" class="text-center">User Role</th>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Email Address</th>
                            <th scope="col" class="text-center">Last Active</th>
                            <th scope="col" class="text-center">Region</th>
                            <th scope="col" class="text-center">Delete</th>
                            <th scope="col" class="text-center">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @if (count($users) > 0)
                                @foreach ($users as $user)
                        </tr>

                        <td class="text-center">{{ $user['created_at']->format('Y-m-d') }}</td>
                        <td class="table-secondary text-center">{{ $user['type'] }}</td>
                        <td class="text-center">{{ $user['name'] }}</td>
                        <td class="table-secondary text-center">{{ $user['email'] }}</td>
                        <td class=" text-center">{{ $user['created_at']->format('H:i:s') }}</td>
                        <td class="table-secondary text-center">{{ $user['region'] }}</td>
                        <td class="text-center">
                            <!-- <button class="delete"> <img src={{ asset('assets/img/web/Deleteicon.svg') }}  width="20" height="25" alt="Black Icon">Delete</button> -->
                            <a class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#myModal">Delete</a>
                        </td>
                        <td class=" table-secondary text-center">
                            <a href="edit/{{ $user->id }}" class="btn btn btn-xs">Edit</a>
                        </td>
                        </tr>
                    </tbody>
                    @endforeach
                @else
                    <h4>There are no users to display</h4>
                    @endif
                    <div>
                </table>
            </div>
            {{-- Modal one --}}
            <div class="modal fade" id="myModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
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
                            <div class="mt-3 pt-3 d-flex align-items-center justify-content-center">
                                <h4>Are you sure you want to delete <br>this user?</h4>
                            </div>
                            <div class="mt-3 pt-3 d-flex align-items-center justify-content-center">
                                 
                                    <a class="btn btn-danger" href="delete/{{ $user->id }}" role="button"
                                    id="btndelete" data-bs-toggle="modal" data-bs-target="#sucessModal"
                                    data-bs-dismiss="modal">Yes</a>

                                <a class="btn btn-outline-dark" data-bs-dismiss="modal" href="#" role="button"
                                    id="btndelete">No</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            {{-- Modal two --}}
            <div class="modal fade" id="sucessModal">
                <div class="modal-dialog modal-dialog-centered" role="document">

                    <div class="modal-content">
                        <!-- Modal Header -->
                        {{-- <div class="modal-header">
                                <h4 class="modal-title">Modal Heading</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div> --}}

                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="mt-3 pt-3 d-flex align-items-center justify-content-center">
                                <h4>User Deleted</h4>
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
    </main>
@endsection
