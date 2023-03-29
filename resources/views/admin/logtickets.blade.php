
<meta name="description" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <style>
        /* */
    </style>

<link rel="stylesheet" href="{{ asset('assets/css/site.css') }}">




    <main>
        <div class="container">
            <div class="row col-sm-12 mb-6">
                <div class="text-start">
                    <h4 class="backText">
                        < Log a ticket</h4>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center">

 
                  
                      

                        <form class="row mb-3 ticket" action="{{route('register-ticket')}}" method="post"  >

                        @csrf
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-4 mb-4">
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
                                    </select>
                                </div>
                                <div class="col-md-5 mb-4">
                                    <label for="inputState" class="form-label">Network Type:</label>
                                    <select id="network_type" class="form-control" name="network_type">
                                        <option selected>All</option>
                                        <option value="LAN">LAN</option>
                                        <option value="WAN">WAN</option>
                                        <option value="OTHER">OTHER</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-12 mb-3">
                                <label for="inputAddress2" class="form-label">Affected User</label>
                                <input type="text"  id="inputAddress2" placeholder="name"  class="form-control"  name="affected_user">
                                <span class="text-danger">@error('affected_user') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="inputAddress2" class="form-label">Ticket Number</label>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" id="checkbox1" name="option1" value="INC-"  onclick="checkOption(this)">
                                            <label for="checkbox1" >INC</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" id="checkbox2" name="option2" value="SR-" onclick="checkOption(this)">
                                            <label for="checkbox2">SR</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="text" id="ticket_number"  class="form-control" name="ticket_number">
                                    <span class="text-danger">@error('ticket_number') {{$message}} @enderror</span>
                                    </div>

                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="inputAddress2" class="form-label">Contact Details</label>
                                    <input type="text" id="contact"  class="form-control" name="contact">
                                    <span class="text-danger">@error('contact') {{$message}} @enderror</span>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="inputAddress2" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                    <span class="text-danger">@error('title') {{$message}} @enderror</span>
                                </div>
                            </div>
                        </div>
                  
                        <div class="col-sm-6">
                            <div class="row">
                            <div>
        <label for="assigned_to">Assigned to</label>
        <select name="assigned_to" id="assigned_to">
        <option value="">-- Select a technician --</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

                           
                            </div>





                            <div class="col-md-12 mb-3">
                                <label for="inputCity" class="form-label"><b>Alternate Contact Details</b></label>
                                <input type="text" class="form-control" name="alternate_contact">
                                <span class="text-danger">@error('alternate_contact') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-12 mb-3">
                                    <label for="password" class="password">Description</label>
                                    <input type="text" class="form-control" placeholder="description" name="description" value="">

                                    <div class="col-md-12 mb-3">
                            <!-- <label for="exampleFormControlTextarea1" class="form-label"><b>Issue Description:</b></label> -->
                                 <!-- <p class="text-end"> 250 character limit:</p> -->
                                <!-- <textarea  placeholder="Leave a comment here" id="floatingTextarea2" rows="4" cols="45"  class="form-control" name="decriptiom" value=""></textarea> -->

                                    <span class="text-danger">@error('description') {{$message}} @enderror</span>
                                </div>
                                
                                <!-- <div class="col-md-12 mb-3">
                                <label for="inputCity" class="form-label"><b>Alternate Contact Details</b></label>
                                <input type="text" class="form-control" name="alternate_contact">
                                <span class="text-danger">@error('alternate_contact') {{$message}} @enderror</span>
                            </div> -->



                            </div>
                         

                        </div>

                        <div class="col-sm-5">
                            <div class="mb-4" id="container">
                                <button   class="btn btn-primary buttonLog" type="submit">Log</button>
                              
                            </div>

                        </div>
                        <div class="col-sm-5">
                            <div class="mb-4" id="container">
                                <button type="button" class="btn btn-primary buttonCancel">Cancel</button>

                            </div>

                        </div>
                    </div>
                </form>



                      </div>
        </div>
        </div>
    </main>


    <script>
  function checkOption(checkbox) {
    // Uncheck the other checkbox if this one is checked
    if (checkbox.checked && checkbox.name === 'option1') {
      document.querySelector('input[name="option2"]').checked = false;
    } else if (checkbox.checked && checkbox.name === 'option2') {
      document.querySelector('input[name="option1"]').checked = false;
    }
    
    // Update the input field value
    document.getElementById('inputField').value = checkbox.checked ? checkbox.value : '';
  }
</script>

