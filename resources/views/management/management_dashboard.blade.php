
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
    <link rel="stylesheet" href="{{ asset('assets/css/management_dashboard.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


 

    <br>
    <br>
    <br>
    <br>
    <br>
  
    
  
            <div class="container">
            <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
                <form class="row mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <label for="inputState" class="form-label">Region:</label>
                                    <select id="inputState" class="form-select">
                                        <option selected></option>
                                        <option value="1">Region A</option>
                                        <option value="2">Region B</option>
                                        <option value="3">Region C</option>
                                        <option value="4">Region D</option>
                                        <option value="5">Region E</option>
                                        <option value="5">Region F</option>
                                    </select>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <label for="inputState" class="form-label">Period</label>
                                    <select id="inputState" class="form-select">
                                    <option selected></option>
                                        <option value="1">Monthly</option>
                                        <option value="2">Weekly</option>
                                        <option value="2">Daily</option>
                                    </select>
                                </div>
                        
</div>
</div>
</div>



<div class="row">
                <div class="col">
                    <div class="list_wrapper">
                        <div class="each_project">
                            <div class="col-12 col-lg-12 mb-3 ">
                                <div class=" text-center h6">
                                    <p>Total Incidents</p>
                                </div>
                                <hr>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class=" text-center h4">
                                    <p>530</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="list_wrapper">
                        <div class="each_project">
                            <div class="col-12 col-lg-12 mb-3 ">
                                <div class=" text-center h6">
                                    <p>Total Service Requests</p>
                                </div>
                                <hr>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class=" text-center h4">
                                    <p>285</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col">
                    <div class="list_wrapper">
                        <div class="each_project">
                            <div class="col-12 col-lg-12 mb-3 ">
                                <div class=" text-center h6">
                                    <p>Total Logged</p>
                                </div>
                                <hr>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class=" text-center h4">
                                    <p>810</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="col">
                    <div class="list_wrapper">
                        <div class="each_project">
                            <div class="col-12 col-lg-12 mb-3 ">
                                <div class=" text-center h6">
                                    <p>Total Open</p>
                                </div>
                                <hr>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class=" text-center h4">
                                    <p>310</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col">
                    <div class="list_wrapper">
                        <div class="each_project">
                            <div class="col-12 col-lg-12 mb-3 ">
                                <div class=" text-center h6">
                                    <p>Total Closed</p>
                                </div>
                                <hr>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class=" text-center h4">
                                    <p>500</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- end project status overview  end-->
                   <div class="row mt-5 pt-5">
                    <div class="col-lg-8">
                   <h3><b>Ticket Status Reports</b></h3>
</div>

<div class="col-lg-4">
<!-- <label class="form-label" for="form1"><b>Search</b></label> -->
<div class="input-group">
  <div class="form-outline">
    <input id="search-focus" type="search" id="form1" class="search"  placeholder="Search" />
   
  </div>
  <!-- <button type="button" class="btnSearch">
    <i class="fas fa-search"></i>
  </button> -->
</div>
</div>


<br>
<br>
<br>
<br>
                        <div class="col-lg-2">
                            <div class="test-start h6">
                                Ticket Type:
                            </div>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>All</option>
                                <option value="1">Incident</option>
                                <option value="2">Service Requests</option>
                               
                            </select>
                        </div>

                        <div class="col-lg-2">

                            <div class="test-start h6">
                                Network Type:
                            </div>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>All</option>
                                <option value="1">LAN</option>
                                <option value="2">WAN</option>
                                <option value="3">Open Days</option>
                            </select>
                        </div>

                        <div class="col-lg-2">

                            <div class="test-start h6">
                                status:
                            </div>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>All</option>
                                <option value="1">Accepted</option>
                                <option value="2">Started</option>
                                <option value="3">User not available</option>
                                <option value="3">Complete</option>
                                <option value="3">Rejected</option>
                            </select>
                        </div>

                        <div class="col-lg-2">
            <div class="test-start h6">
    Region:
</div>
<select class="form-select" aria-label="Default select example">
    <option selected></option>
    <option value="1">All</option>
    <option value="2">Region A</option>
    <option value="4">Region B</option>
    <option value="5">Region C</option>
    <option value="6">Region D</option>
    <option value="7">Region E</option>
    <option value="8">Region F</option>
</select>
</div>

<div class="col-lg-2">
            <div class="test-start h6">
    Techician:
</div>
<select class="form-select" aria-label="Default select example">
    <option selected></option>
    <option value="1">S. Hadebe</option>
    <option value="2">T. Ndlangamandla</option>
    <option value="3">C. Ngwenyama</option>
    <option value="3">C. Maphanga</option>
    <option value="3">C. Patel</option>
    <option value="3">D. Samson</option>
</select>
</div>


                        <div class="col-lg">
                       
                            <div class="row ">
                                <div class="col-lg-6 ">

                                <button onclick="window.location='{{route('admin.logTicket')}}'" class="print"> <img src={{ asset('assets/img/web/Download.svg') }}  width="40" height="34" alt="Black Icon"> Download</button>
                                </div>

                                <div class="col-lg-4 ">
                                <button onclick="window.location='{{route('admin.logTicket')}}'" class="print"> <img src={{ asset('assets/img/web/Print.svg') }}  width="40" height="34" alt="Black Icon"> Print</button>
                                </div>
                            </div>
                        </div>

                    </div>
 
        <div class=" form_wrapper custom_scrollbar">
            <div class="row d-flex justify-content-end">
                <div class="col-sm-6">

</div>
<div class="row mt-5 pt-5 d-flex justify-content-between">



</div>



</div>

</div>


 <!-- table -->
 <table id="customers">
        
        <tr>

            <th scope="col" class="text-center">Ticket Type</th>
            <th scope="col" class="text-center">Ticket Number</th>
            <th scope="col" class="text-center">Network Type</th>
            <th scope="col" class="text-center">Number of Points</th>
            <th scope="col" class="text-center">Call Logged</th>
            <th scope="col" class="text-center">Time Closed</th>
            <th scope="col" class="text-center">Time Updated</th>
            <th scope="col" class="text-center">Status</th>
            <th scope="col" class="text-center">Region</th>
            <th scope="col" class="text-center">Technician</th>
            <th scope="col" class="text-center"  style="width:20%">Description</th>
            <th scope="col" class="text-center" style="width:20%">Comments</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>

            <td class="text-center">SR</td>
            <td class="gray_td text-center">SR564893</td>
            <td class="text-center">WAN</td>
            <td class="gray_td text-center">8</td>
            <td class=" text-center">07:45</td>
            <td class="text-center">10:35</td>
            <td class="text-center">11:40</td>
            <td class="text-center">Closed</td>
            <td class="text-center">Region C</td>
            <td class="text-center">Thulani<br> Ndlangamandla</td>
               <td class="">
                <h6>Breakfix-Sappi Buiding. West wing 5th floor 4 network points not working and cables neeede for new printers to be...</h6>
               </td>

               <td class="">
                <h6>Breakfix-Sappi Buiding. West wing 5th floor 4 network points not working and cables neeede for new printers to be...</h6>
               </td>
        </tr>
        <tr>

        <td class="text-center">SR</td>
            <td class="gray_td text-center">SR564893</td>
            <td class="text-center">WAN</td>
            <td class="gray_td text-center">8</td>
            <td class=" text-center">07:45</td>
            <td class="text-center">10:35</td>
            <td class="text-center">11:40</td>
            <td class="text-center">Closed</td>
            <td class="text-center">Region C</td>
            <td class="text-center">Thulani<br> Ndlangamandla</td>
               <td class="">
                <h6>Breakfix-Sappi Buiding. West wing 5th floor 4 network points not working and cables neeede for new printers to be...</h6>
               </td>

               <td class="">
                <h6>Breakfix-Sappi Buiding. West wing 5th floor 4 network points not working and cables neeede for new printers to be...</h6>
               </td>

        </tr>
        
        <tr>

        <!-- <td class="text-center">SR</td>
            <td class="gray_td text-center">SR564893</td>
            <td class="text-center">WAN</td>
            <td class="gray_td text-center">8</td>
            <td class=" text-center">07:45</td>
            <td class="text-center">10:35</td>
            <td class="text-center">11:40</td>
            <td class="text-center">Closed</td>
            <td class="text-center">Region C</td>
            <td class="text-center">Thulani<br> Ndlangamandla</td>
               <td class="">
                <h6>Breakfix-Sappi Buiding. West wing 5th floor 4 network points not working and cables neeede for new printers to be...</h6>
               </td>

               <td class="">
                <h6>Breakfix-Sappi Buiding. West wing 5th floor 4 network points not working and cables neeede for new printers to be...</h6> -->
               <!-- </td> -->

        </tr>

        <tr>

        <!-- <td class="text-center">SR</td>
            <td class="gray_td text-center">SR564893</td>
            <td class="text-center">WAN</td>
            <td class="gray_td text-center">8</td>
            <td class=" text-center">07:45</td>
            <td class="text-center">10:35</td>
            <td class="text-center">11:40</td>
            <td class="text-center">Closed</td>
            <td class="text-center">Region C</td>
            <td class="text-center">Thulani<br> Ndlangamandla</td>
               <td class="">
                <h6>Breakfix-Sappi Buiding. West wing 5th floor 4 network points not working and cables neeede for new printers to be...</h6>
               </td>

               <td class="">
                <h6>Breakfix-Sappi Buiding. West wing 5th floor 4 network points not working and cables neeede for new printers to be...</h6>
               </td> -->

</tr>
<tr>



   <tr>

  
</tr>



</tr>
    </tbody>
</table>

@endsection

