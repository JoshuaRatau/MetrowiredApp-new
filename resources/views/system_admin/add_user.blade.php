<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin top: 20px;">
                <h4>Registration</h4>
                <hr>
                <form action="{{route('add-user')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter Full Name" name="name" value="" >
                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
            </div>      

                <div class="form-group">
                 <label for="email">Email</label>
                <input type="text" class="form-control" placeholder="Enter Full Email" name="email" value="" >
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>  

                <div class="form-group">
                 <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Enter Full Password" name="password" value="" >
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>  
                <div class="form-group">
                <button class="btn btn-block btn-primary" type="submit">Register</button>
</div>

                <br>
<a href="login">Already Registered!! Login Here.</a>
</form>


</div>


</div>
</div>

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>