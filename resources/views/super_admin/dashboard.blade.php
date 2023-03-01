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


   <main class="my-auto">
    <div class="container">
 
        <div class=" form_wrapper custom_scrollbar">
            <div class="row d-flex justify-content-end">
                <div class="col-sm-6">
                    <a  class="text-start h3">
                        < Property Name: </a>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <a class="btn btn-custom-red">Termination Requests</a>
                    </div>
                    <div class="col-lg-3 col-sm-3">

                        <div class="input-group custom_search_input">
                            <input class="form-control " type="search" value="search" id="example-search-input">
                            <span class="">
                                <button class="form-control  " type="button">
                                    <img src="{{asset('assets/img/web/search_icon.svg')}}" alt="" srcset="">
                                </button>
                            </span>
                        </div>


                    </div>

                </div>
                <div class="row  ">

                    <div class="   ">

                        <div class="  content ">
                            <div class="row mt-5 pt-5">

                                <div class="col-sm-3 ">
                                    <div class="test-start h6 ">
                                        Sort by:
                                    </div>
                                    <select class="form-select " aria-label="Default select example">
                                        <option selected="">Oldest Start Date</option>
                                        <option value="1">Bellavista</option>
                                        <option value="2">Barea</option>
                                        <option value="3">Braamfontein</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">

                                    <div class="test-start h6 ">
                                        Unit Type:
                                    </div>
                                    <select class="form-select " aria-label="Default select example">
                                        <option selected="">All</option>
                                        <option value="1">Bellavista</option>
                                        <option value="2">Barea</option>
                                        <option value="3">Braamfontein</option>
                                    </select>


                                </div>
                                <div class="col-sm-6">

                                    <div class="test-end h6 ">
                                        Time Remaining On Lease:
                                    </div>
                                    <div class=" d-flex justify-content-around ">
                                        <div class="form-check px-3">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                            <label class="form-check-label text-dark h6" for="gridCheck1">
                                                60 Days
                                            </label>
                                        </div>

                                        <div class="form-check px-3">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                            <label class="form-check-label text-dark h6" for="gridCheck1">
                                                3 Months
                                            </label>
                                        </div>
                                        <div class="form-check px-3">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                            <label class="form-check-label text-dark h6" for="gridCheck1">
                                                6 Months
                                            </label>
                                        </div>

                                    </div>


                                </div>


                            </div>
</div>
</div>
<br>
 <!-- table -->
 <div class="list_wrapper table-responsive" style=" padding:0;">

<table class="table table-hover">
    <thead class="table-dark">
        <tr>

            <th scope="col" class="text-center">Ticket Type</th>
            <th scope="col" class="text-center">Ticket Number</th>
            <th scope="col" class="text-center">Network Type</th>
            <th scope="col" class="text-center">Number of Points(Break-Fix)</th>
            <th scope="col" class="text-center">Call Logged</th>
            <th scope="col" class="text-center">Affected User</th>
            <th scope="col" class="text-center">Status</th>
            <th scope="col" class="text-center">Region</th>
            <th scope="col" class="text-center">Technician</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>

            <td class="text-center">SR</td>
            <td class="gray_td text-center">SR564893</td>
            <td class="text-center">WAN</td>
            <td class="gray_td text-center">8</td>
            <td class=" text-center">07:45</td>
            <td class="text-center">J.Jackman</td>
            <td class="text-center">Logged</td>
            <td class="text-center">Region A</td>
               <td class="text-center">Sandile Hadebe</td>

        </tr>
        <tr>

            <td class="text-center">SR</td>
            <td class="gray_td text-center">SR564893</td>
            <td class="text-center">WAN</td>
            <td class="gray_td text-center">8</td>
            <td class=" text-center">07:45</td>
            <td class="text-center">J.Jackman</td>
            <td class="text-center">Logged</td>
            <td class="text-center">Region A</td>
               <td class="text-center">Sandile Hadebe</td>

        </tr>
        
        <tr>

            <td class="text-center">SR</td>
            <td class="gray_td text-center">SR564893</td>
            <td class="text-center">WAN</td>
            <td class="gray_td text-center">8</td>
            <td class=" text-center">07:45</td>
            <td class="text-center">J.Jackman</td>
            <td class="text-center">Logged</td>
            <td class="text-center">Region A</td>
               <td class="text-center">Sandile Hadebe</td>

        </tr>

        <tr>

<td class="text-center">SR</td>
<td class="gray_td text-center">SR564893</td>
<td class="text-center">WAN</td>
<td class="gray_td text-center">8</td>
<td class=" text-center">07:45</td>
<td class="text-center">J.Jackman</td>
<td class="text-center">Logged</td>
<td class="text-center">Region A</td>
   <td class="text-center">Sandile Hadebe</td>

</tr>
<tr>

<td class="text-center">SR</td>
<td class="gray_td text-center">SR564893</td>
<td class="text-center">WAN</td>
<td class="gray_td text-center">8</td>
<td class=" text-center">07:45</td>
<td class="text-center">J.Jackman</td>
<td class="text-center">Logged</td>
<td class="text-center">Region A</td>
   <td class="text-center">Sandile Hadebe</td>

   <tr>

<td class="text-center">SR</td>
<td class="gray_td text-center">SR564893</td>
<td class="text-center">WAN</td>
<td class="gray_td text-center">8</td>
<td class=" text-center">07:45</td>
<td class="text-center">J.Jackman</td>
<td class="text-center">Logged</td>
<td class="text-center">Region A</td>
   <td class="text-center">Sandile Hadebe</td>

</tr>

<td class="text-center">SR</td>
<td class="gray_td text-center">SR564893</td>
<td class="text-center">WAN</td>
<td class="gray_td text-center">8</td>
<td class=" text-center">07:45</td>
<td class="text-center">J.Jackman</td>
<td class="text-center">Logged</td>
<td class="text-center">Region A</td>
   <td class="text-center">Sandile Hadebe</td>

</tr>
        


    </tbody>
</table>
</div>