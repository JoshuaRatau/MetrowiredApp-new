<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ticket;
use Session;
use App\Models\Completed;
use DB;
use Hash;





use App\Exports\MyTableExport;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;



class TicketController extends Controller
{

    public function ticket()
    {
        $users = DB::table('users')->where('type', 'technician')->get();
        return view('admin.ticketlog', ['users' => $users]);

    }


    //
    public function registerTicket(Request $request)
    {
        $request->validate([
            // 'region'=>'required',
            // 'network_type'=>'required',
            // 'affected_user'=>'required',
            // 'ticket_number'=>'required',
            // 'contact'=>'required',
            // 'title'=>'required',
            // 'technician'=>'required',
            // 'alternate_contact'=>'required',

        ]);
        $ticket = new Ticket();
        $ticket->region = $request->region;
        $ticket->network_type = $request->network_type;
        $ticket->affected_user = $request->affected_user;
        $ticket->ticket_number = $request->ticket_number;
        $ticket->contact = $request->contact;
        $ticket->title = $request->title;
        $ticket->assigned_to = $request->assigned_to;
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

    //   public function techdashboard(){
    //     return view('technician.dashboard', [
    //         'tickets' =>Ticket::all(),
    //     ]);
    //   }

    //View ticket Details


    //   public function details($id){
//     $tickets=Ticket::find($id);
//     return view('technician.ticket_details', compact('tickets'));
//   }



    public function details($id)
    {

        $ticket = Ticket::find($id);
        return view('technician.ticket_details', compact('ticket'));

    }

    public function update(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->status = $request->status;
        $ticket->save();
        if ($ticket->status == 'Complete') {
            return view('technician.complete', ['ticket' => $ticket]);
         
        } else {
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
        $ticket->save();
       

        

        //reomove ticket from techncian dashboad
    
        return redirect()->route('technician.home');
    }



    public function download()
    {
        $data = Ticket::all();
        $fileName = 'management_reports.xlsx'; //Replace your_file_name with the name you want to give your Excel file

        return Excel::download(function ($excel) use ($data) {
            $excel->sheet('Sheet1', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        }, $fileName);
    }

}
