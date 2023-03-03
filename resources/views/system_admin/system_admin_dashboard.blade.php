
@extends('layouts.system_admin')


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
        <h3><b>Active Users</b><h3>
    </div>
   
</div>





<div class="col-lg-2">

    <div>
   
    </div>
   
</div>


</div>



</div>

</div>


 <!-- table -->
 <table id="customers">
        
        <tr>

            <th scope="col" class="text-center">Date Added</th>
            <th scope="col" class="text-center">User Role</th>
            <th scope="col" class="text-center">Name</th>
            <th scope="col" class="text-center">Email Address</th>
            <th scope="col" class="text-center">Last Active</th>
            <th scope="col" class="text-center">Affected User</th>
            <th scope="col" class="text-center">Status</th>
            <th scope="col" class="text-center">Region</th>
            <th scope="col" class="text-center">Delete</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>

            <td class="text-center">03/04/2023</td>
            <td class="gray_td text-center">System Admin</td>
            <td class="text-center">F.Dlamini</td>
            <td class="gray_td text-center">user@metrowired.co.za</td>
            <td class=" text-center">07:45</td>
            <td class="text-center">J.Jackman</td>
            <td class="text-center">Logged</td>
            <td class="text-center">Region A</td>
               <td class="text-center">
              
               <button class="delete"> <img src={{ asset('assets/img/web/Deleteicon.svg') }}  width="20" height="25" alt="Black Icon">Delete</button>
               </td>

        </tr>
        <tr>

            <td class="text-center">03/04/2023</td>
            <td class="gray_td text-center">Management</td>
            <td class="text-center">G. Dlamini</td>
            <td class="gray_td text-center">user@metrowired.co.za</td>
            <td class=" text-center">07:45</td>
            <td class="text-center">J.Jackman</td>
            <td class="text-center">Logged</td>
            <td class="text-center">Region A</td>
               <td class="text-center">
               <button class="delete"> <img src={{ asset('assets/img/web/Deleteicon.svg') }}  width="20" height="25" alt="Black Icon">Delete</button>
     
               </td>

        </tr>
        
        <tr>

        <td class="text-center">03/04/2023</td>
            <td class="gray_td text-center">Management</td>
            <td class="text-center">G. Dlamini</td>
            <td class="gray_td text-center">user@metrowired.co.za</td>
            <td class=" text-center">07:45</td>
            <td class="text-center">J.Jackman</td>
            <td class="text-center">Logged</td>
            <td class="text-center">Region A</td>
               <td class="text-center">
               <button class="delete"> <img src={{ asset('assets/img/web/Deleteicon.svg') }}  width="20" height="25" alt="Black Icon">Delete</button>
               </td>

        </tr>

        <tr>

        <td class="text-center">03/04/2023</td>
            <td class="gray_td text-center">Management</td>
            <td class="text-center">G. Dlamini</td>
            <td class="gray_td text-center">user@metrowired.co.za</td>
            <td class=" text-center">07:45</td>
            <td class="text-center">J.Jackman</td>
            <td class="text-center">Logged</td>
            <td class="text-center">Region A</td>
               <td class="text-center">
               <button class="delete"> <img src={{ asset('assets/img/web/Deleteicon.svg') }}  width="20" height="25" alt="Black Icon">Delete</button>
   </td>

</tr>
<tr>

<td class="text-center">03/04/2023</td>
            <td class="gray_td text-center">Management</td>
            <td class="text-center">G. Dlamini</td>
            <td class="gray_td text-center">user@metrowired.co.za</td>
            <td class=" text-center">07:45</td>
            <td class="text-center">J.Jackman</td>
            <td class="text-center">Logged</td>
            <td class="text-center">Region A</td>
               <td class="text-center">
               <button class="delete"> <img src={{ asset('assets/img/web/Deleteicon.svg') }}  width="20" height="25" alt="Black Icon">Delete</button>
   </td>

   <tr>

< <td class="text-center">03/04/2023</td>
            <td class="gray_td text-center">Management</td>
            <td class="text-center">G. Dlamini</td>
            <td class="gray_td text-center">user@metrowired.co.za</td>
            <td class=" text-center">07:45</td>
            <td class="text-center">J.Jackman</td>
            <td class="text-center">Logged</td>
            <td class="text-center">Region A</td>
               <td class="text-center">
               <button class="delete"> <img src={{ asset('assets/img/web/Deleteicon.svg') }}  width="20" height="25" alt="Black Icon">Delete</button>
   </td>

</tr>

<td class="text-center">03/04/2023</td>
            <td class="gray_td text-center">Technician</td>
            <td class="text-center">G. Dlamini</td>
            <td class="gray_td text-center">user@metrowired.co.za</td>
            <td class=" text-center">07:45</td>
            <td class="text-center">J.Jackman</td>
            <td class="text-center">Logged</td>
            <td class="text-center">Region A</td>
               <td class="text-center">
               <button class="delete"> <img src={{ asset('assets/img/web/Deleteicon.svg') }}  width="20" height="25" alt="Black Icon">Delete</button>

</tr>
    </tbody>
</table>

@endsection

