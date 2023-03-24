

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
    <link rel="stylesheet" href="{{ asset('assets/css/system_admin_dashboard.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


 
  
   



   <main class="my-auto">
    <div class="container">
 
        <div class=" form_wrapper custom_scrollbar">
            <div class="row d-flex justify-content-end">
                <div class="col-sm-6">

</div>
<div class="row mt-5 pt-5 d-flex justify-content-between">


<div class="col-lg-3">


    <div>
        <h3><b>Tickets Logged</b><h3>
    </div>
   
</div>


<div class="col-lg-2">

    <div>
 
    <button type="button" onclick="window.location='{{ url("/ticket") }}'" class="btn btn-primary btn-lg btnLogin"> <img src={{ asset('assets/img/web/LogTicket.svg') }} width="40" height="34" >Log a ticket</button>
    </div>
   <br>
</div>

<!-- table -->
<table id="customers">
        
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
    @if (is_countable($tickets) > 0)
    @foreach ($tickets as $ticket)

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
    </tbody>
    @endforeach
                    @else
                        <h4>There are no users to display</h4>
                        @endif


</table>
@endsection