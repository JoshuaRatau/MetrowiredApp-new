
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


   <!-- Header -->

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-kIGQ2BYY0fn8U6qZUJhDTH2psV7sL9Xq3I7CHljBOEiZG7fTbhTlZIX7yf1luEHTJbsYX9gENjFpr38xHtBOvw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-NfLLKr2c0xAdTd3a3K5p5ue5FY5zRftXyKj5OawKGKTjjHXitcPZ3xNq3q74p5L5M5ql21xyJ9XzK6/30o6lA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    

    <style>

    </style>
</head>

<body>

<div class="m-6">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="{{asset('assets/img/home/MWLogo.png')}}" height="50" alt="metro wired Logo">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">  
                </div>
                <div class="navbar-nav ms-auto">
                <a href="/SystemAdminlogin" class="nav-item nav-link"><b>System Admin |</b></a>
                <a href="/Adminlogin" class="nav-item nav-link"><b>Admin |</b></a>
                <a href="/Technicianlogin" class="nav-item nav-link"><b>Technician |</b></a>
                <a href="/Managementlogin" class="nav-item nav-link"><b>Management</b></a>
                </div> 
               
            </div>
        </div>
    </nav>
</div>
<br>








<div class="container">
    <div class="img">
        <main class="my-auto">
            <div class="container">
                <div class="d-flex align-items-center justify-content-center">

                    <div class="row">
                        <div class="col-sm-12 mx-auto d-flex align-items-center justify-content-center">
                         
                        
                        <!-- <div class="col-sm-12">
                            <div class="text-center home-text">
                                <h2>Metrowired App</h2>
                            </div> -->


  <div class=”row small”>
    <div class=”imagegroup” style=”animation-delay: 1s;”>
    <img src={{ asset('assets/img/home/Login.jpg') }} height="390" width= "250" >
    <img src={{ asset('assets/img/home/Homepage.jpg') }} height="390" width= "250" >
    <img src={{ asset('assets/img/home/Ticket.jpg') }} height="390" width= "250" >
    <img src={{ asset('assets/img/home/Details.jpg') }} height="390" width= "250" >
  
    </div>
  </div>            
      </div>
      </div>
  </div>            
      </div>
      </div>
</div>
              
                        <div class="col-sm-12 mx-auto d-flex align-items-center justify-content-center">
                       <div class="col-sm-12">
                            <div class="text-center home-text">
                                <h4>Metrowired App</h4>
                                <p><b>Metrowired App is a ticket support Application, that allows technicians to easily:</b></p>
                          <ul style="list-style-type: none;">
                          <li>&#x2022; View all open tickets</li>
                          <li>&#x2022; View one ticket in more details and start the ticket using the status dropdown menu</li>
                           <li>&#x2022; Update the progress of the ticket using the same dropdown menu of starting a ticket</li>
                           <li>&#x2022;Once a ticket is complete and the the status is updated to complete, technicians can provide additional information about the resolution and then the ticket is automatically marked as complete</li>
</ul>
</div>
  </div>
</div>


<div style="width: 100%;">
<footer id="footer" class="footer-1">
<div class="main-footer widgets-dark typo-light">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget subscribe no-box">
<a href="#" class="navbar-brand">
<img src="{{asset('assets/img/home/MWLogo.png')}}" height="50" alt="metro wired Logo">
</a>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title">Quick Links<span></span></h5>
<ul class="thumbnail-widget">
<li>
<div class="thumb-content"><a href="/SystemAdminlogin"><b>System Admin</b></a></div> 
</li>
<li>
<div class="thumb-content"><a href="http://127.0.0.1:8000/admin/home"><b>Admin</b></a></div> 
</li>
<li>
<div class="thumb-content"><a href="http://127.0.0.1:8000/technician/home"><b>Technician</b></a></div> 
</li>
<li>
<div class="thumb-content"><a href="http://127.0.0.1:8000/management/home"><b>Management</b></a></div> 
</li>

</ul> 
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title">Legal<span></span></h5>
<ul class="thumbnail-widget">
<li>
<div class="thumb-content"><a href="https://metrowired.co.za/media-disclaimer/"><b>Media Disclaimer</b></a></div> 
</li>
<li>
<div class="thumb-content"><a href="https://metrowired.co.za/acceptable-use-policy/"><b>Acceptable Use Policy</b></a></div> 
</li>
<li>
<div class="thumb-content"><a href="https://metrowired.co.za/wp-content/uploads/2022/09/MetroWired_Section-51-Manual.pdf"><b>Section 51 Manual</b></a></div> 
</li>
<li>
<div class="thumb-content"><a href="https://metrowired.co.za/privacy-policy-2/"><b>Privacy Policy</b></a></div> 
</li>

<li>
<div class="thumb-content"><a href="https://metrowired.co.za/privacy-policy-2/"><b>ISPA Code of Conduct</b></a></div> 
</li>

</ul>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">

<div class="widget no-box">
<h5 class="widget-title">Contact Us<span></span></h5>

<p><a href="tel:1234567890" title="glorythemes"><b>+27 11 568 5092</b></a></p>

<p><a href="mailto:info@domain.com" title="glorythemes"><b>info@metrowired.co.za</b></a></p>
<ul class="social-footer2">



<li class=""><a title="facebook" target=_blank href="https://www.facebook.com/MetroWired/"><img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="Facebook icon" width="30" height="30"></a></li>

<li class=""><a title="linkedin" target=_blank href="https://www.linkedin.com/company/metrowired-holdings/"><img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn icon" width="30" height="30"></a></li>

<li class=""><a title="facebook" target=_blank href="https://twitter.com/metrowired?lang=en"><img src="https://abs.twimg.com/icons/apple-touch-icon-192x192.png" alt="Twitter icon" width="40" height="40"></a></li>
  </a>
</ul>
</div>
</div>

</div>
</div>
</div>
  
<div class="footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-6 text-center">
<p>&copy 2020 MetroWired (Pty) Ltd. All Rights Reserved</p>
</div>
<div class="col-md-6 text-center">
<img src="{{asset('assets/img/home/ISPA.png')}}" height="50" alt="metro wired Logo">
</div>
</div>
</div>
</div>
</footer>
  </div>
</div>





  


 