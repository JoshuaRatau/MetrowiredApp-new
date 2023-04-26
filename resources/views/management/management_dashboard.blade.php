@extends('layouts.management')


@section('title', 'Metrowired')
@section('meta')
    <meta name="description" content="" />
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="styleshet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

@endsection

@section('style')
    <style>
        /* */
    </style>
@endsection
<link rel="stylesheet" href="{{ asset('assets/css/management_dashboard.css') }}">
@section('content')



    <main>
        <div class="container">
            <div class="row">
                <div class=" col-md-6 col-sm-12">
                    <div class="row">
                        <div class=" col-md-6 mb-4">
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
                        <div class=" col-md-6 mb-4">
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
            <div>
                <div class="row">
                    <div class="col text-center p-3">
                        <div class="card card-details">
                            <div class="card-body">
                                <h6 class="card-title text-center">Total Incidents</h6>
                                <hr>
                                <p class="card-text text-center">{{ $incident }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center p-3">
                        <div class="card card-details">
                            <div class="card-body">
                                <h6 class="card-title text-center">Total Service Requests</h6>
                                <hr>
                                <p class="card-text text-center">{{ $service }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center p-3">
                        <div class="card card-details">
                            <div class="card-body">
                                <h6 class="card-title text-center">Total Logged</h6>
                                <hr>
                                <p class="card-text text-center">{{ $ticketCount }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center p-3">
                        <div class="card card-details">
                            <div class="card-body">
                                <h6 class="card-title text-center">Total Open</h6>
                                <hr>
                                <p class="card-text text-center">{{ $open }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center p-3">
                        <div class="card card-details">
                            <div class="card-body">
                                <h6 class="card-title text-center">Total Closed</h6>
                                <hr>
                                <p class="card-text text-center">{{ $closed }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- search button --}}
            <div class="row">
                <div class="col-md-6 p-3">
                    <h3><b>Ticket Status Reports</b></h3>
                </div>
                <div class="col-md-6 col-sm-12 p-3">
                    <div class="input-group d-flex justify-content-md-end justify-content-sm-start">
                        <div class="form-outline">
                            <input id="myInput" name="search" type="search" id="form1" class="search" placeholder="Search" autocomplete="off" />
                        </div>
                    </div>
                </div>
            </div>
            {{-- filter boxes --}}
            <div class="row">
                <div class=" col-md-2 col-sm-12">
                    <div class="test-start h6 select-text">
                        Ticket Type:
                    </div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>All</option>
                        <option value="1">Incident</option>
                        <option value="2">Service Requests</option>

                    </select>
                </div>
                <div class=" col-md-2 col-sm-12">
                    <div class="test-start h6 select-text">
                        Network Type:
                    </div>
                    <select  id="myDropdown" class="form-select" aria-label="Default select example">
                        <option value="">All</option>
                        <option value="LAN">LAN</option>
                        <option value="WAN">WAN</option>
                        <option value="All">All</option>
                    </select>

                </div>
                <div class=" col-md-2 col-sm-12">
                    <div class="test-start h6 select-text">
                        status:
                    </div>
                    <select id="status" class="form-select" aria-label="Default select example">
                        <option value="">All</option>
                        <option value="Started">Started</option>
                        <option value="User not available">User not available</option>
                        <option value="Complete">Complete</option>
                   
                    </select>
                </div>
                <div class=" col-md-2 col-sm-12">
                    <div class="test-start h6 select-text">
                        Region:
                    </div>
                    <select id="filterCity" class="form-select" aria-label="Default select example" id="filter" name="region" >
                        <option selected></option>
                        <option value="">All Regions</option>
                    
                       
                    </select>
                </div>
                <div class=" col-md-2 col-sm-12">
                    <div class="test-start h6 select-text">
                        Techician:
                    </div>
                    <select class="form-select" aria-label="Default select example">
                    <option value="">All</option>
                    @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class=" col-md-2 col-sm-12">
                    <div class="row ">
                        <div class="col-md-6 col-sm-6 p-3">

                            <button onclick="exportTableToExcel('tblData')" class="print select-text"> <img src={{ asset('assets/img/web/Download.svg') }} width="40"
                                    height="34" alt="Black Icon"> Download</button>

                        </div>

                        <div class="col-md-2 col-sm-6 p-3">
                            <button onclick="printTable()" class="print"> <img
                                    src={{ asset('assets/img/web/Print.svg') }} width="40" height="34"
                                    alt="Black Icon"> Print</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="tblData">
              

                    <thead class="table-dark">
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
                            <th scope="col" class="text-center" style="width:20%">Description</th>
                            <th scope="col" class="text-center" style="width:20%">Comments</th>
                        </tr>
                    </thead>
                    <tbody>completed_at
                        @if (is_countable($tickets) > 0)
                            @foreach ($tickets as $ticket)
                                <tr>

                                    <td class="text-center">{{ substr($ticket->ticket_number, 0, 2) }}</td>
                                    <td class="table-secondary text-center">{{ $ticket['ticket_number'] }}</td>
                                    <td class="text-center">{{ $ticket['network_type'] }}</td>
                                    <td class="table-secondary text-center">{{ $ticket['fixes'] }}</td>
                                    <td class=" text-center">{{ $ticket['created_at'] }}</td>
                                    <td class=" table-secondary text-center">{{$ticket->completed_at}}</td>
                                    <td class="text-center">{{$ticket->status_updated }}</td>
                                    <td class="table-secondary text-center">{{ $ticket['status'] }}</td>
                                    <td class="text-center">{{ $ticket['region'] }}</td>
                                    <td class="table-secondary text-center">{{ $ticket->assigned->name }}</td>
                                    <td class="">
                                        <h6>{{ $ticket['description'] }}</h6>
                                    </td>

                                    <td class="table-secondary">
                                        <h6>{{ $ticket['comment'] }}</h6>
                                    </td>

                                </tr>
                            @endforeach
                        @else
                            <h4>There are no tickets to display</h4>
                        @endif

                    </tbody>

                    <div>
                </table>
            </div>


        </div>
    </main>

<script>

function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}

//Print Table Data
  function printTable() {
        var table = document.getElementById("tblData");
        var html = table.outerHTML;
        var newWindow = window.open();
        newWindow.document.write(html);
        newWindow.print();
        newWindow.close();
  }



//Search Table Data

function filterTable() {
  // Get the input value
  var input = document.getElementById("myInput").value.toUpperCase();

  // Get the table
  var table = document.getElementById("tblData");

  // Get all the rows of the table
  var rows = table.getElementsByTagName("tr");

  // Loop through all the rows and hide those that don't match the search query
  for (var i = 0; i < rows.length; i++) {
    var cells = rows[i].getElementsByTagName("td");
    var found = false;
    for (var j = 0; j < cells.length; j++) {
      var cell = cells[j];
      if (cell.innerText.toUpperCase().indexOf(input) > -1) {
        found = true;
        break;
      }
    }
    if (found) {
      rows[i].style.display = "";
    } else {
      rows[i].style.display = "none";
    }
  }
}
var input = document.getElementById("myInput");
input.addEventListener("keyup", filterTable);



//Filter By network Type
const dropdown = document.getElementById('myDropdown');
const table = document.getElementById('tblData');
const rows = table.getElementsByTagName('tr');

dropdown.addEventListener('change', () => {
  const filterValue = dropdown.value.toLowerCase();

  for (let i = 1; i < rows.length; i++) {
    const country = rows[i].getElementsByTagName('td')[2].textContent.toLowerCase();

    if (country.includes(filterValue)) {
      rows[i].style.display = '';
    } else {
      rows[i].style.display = 'none';
    }
  }
});






</script>

@endsection

