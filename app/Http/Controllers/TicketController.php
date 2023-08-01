<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Completed;
use DB;
use Hash;





use App\Exports\MyTableExport;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;



class TicketController extends Controller
{

    public function ticket(Request $request)
    {
        $users = DB::table('users')->where('type', 'technician')->get();

        $data = array();
        if(Session::has('loginId')){
          $data = User::where('id', '=',Session::get('loginId'))->first();
    
        
        }

        return view('admin.ticketlog', compact('users', 'data'));

    }


    //
    public function registerTicket(Request $request )
    {
         $request->validate ([
            'region'=>'required',
            'network_type'=>'required',
            'affected_user'=>'required|string|max:255',
            'ticket_number'=>'required',
            'contact'=>'required | digits:10',
            'title'=>'required',
            'assigned_to'=>'required',
            'fixes'=>'required',
            'alternate_contact'=>'required | digits:10',
            'description'=>'required',
            'location'=>'required',

        ]);
    

        $ticket = new Ticket();
        $ticket->region = $request->region;
        $ticket->network_type = $request->network_type;
        $ticket->affected_user = $request->affected_user;
        $ticket->ticket_number = $request->ticket_number;
        $ticket->contact = $request->contact;
        $ticket->title = $request->title;
        $ticket->assigned_to = $request->assigned_to;
        $ticket->assigned_by = Session('loginId');
        $ticket->fixes = $request->fixes;
        $ticket->alternate_contact = $request->alternate_contact;
        $ticket->description = $request->description;
        $ticket->location = $request->location;


        
        $res = $ticket->save();
        if ($res) {
            return redirect()->back()->with('success', 'User registered Successfuly');

            // return redirect()->route('system_admin.system_admin_dashboard');

        } else {
            return redirect()->back()->with('fail', 'Something wrong');
        }
    }



   public function details($id)
    {

        $ticket = Ticket::find($id);
        return view('technician.ticket_details', compact('ticket'));

    }

    public function update(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->status = $request->status;
        $ticket->status_updated = now(); // status update Time
        $ticket->save();
        if ($ticket->status == 'User not available') {
            return redirect('/techdashboard');

        } else if ($ticket->status == 'Complete'){
            return view('technician.complete', ['ticket' => $ticket]);
        }else{
            return redirect()->back();
        }

        }


    public function index(Request $request)
    {

        $tickets = Tickets::all();
        $regions = DB::table('tickets')->select('region')->distinct()->get();
        return view('management.management_dashboard')->with('tickets');
    }




    public function storecomment(Request $request, $ticketId)
    {
        $ticket = Ticket::findOrFail($ticketId);
        $ticket->response = $request->input('response');
        $ticket->breaks_number= $request->input('breaks_number');
        $ticket->comment = $request->input('comment');
        $ticket->completed_at = now(); // status update Time
        $ticket->save();


        // DRY
        $tickets = Ticket::where('assigned_to', session('loginId'))->where('status', '!=', 'Complete')->get();

        $data = array();
        if(Session::has('loginId')){
          $data = User::where('id', '=' , Session::get('loginId'))->first() ;

            //count
            $assignedTickets = Ticket::where('assigned_to', $data->id)->where('status', '!=', 'Complete')->count();
        }


        //reomove ticket from techncian dashboad

        return view('technician.dashboard', compact( 'data', 'tickets', 'assignedTickets' ));
    }



    

    public function filterIncidents(Request $request)
    {
        $startDate = $request->get('startDate');
        $endDate = $request->get('endDate');

        $tickets = Ticket::whereBetween('created_at', [$startDate, $endDate])->where('ticket_number', 'like', 'in%')->count();

        return response()->json($tickets);
    }

    // public function download()
    // {
    //     $data = Ticket::all();
    //     $fileName = 'management_reports.xlsx'; //Replace your_file_name with the name you want to give your Excel file

    //     return Excel::download(function ($excel) use ($data) {
    //         $excel->sheet('Sheet1', function ($sheet) use ($data) {
    //             $sheet->fromArray($data);
    //         });
    //     }, $fileName);
    // }
}
