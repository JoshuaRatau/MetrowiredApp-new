<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Ticket;
use App\Models\Completed;


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
             return back()->with('success', 'Ticket has been logged.You will be able to see this ticket on your dashboard.');

        } else {
             return back()->with('fail', 'Ticket failed to be logged,retry again to log your ticket.');

        }
 ;
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
        return redirect()->route('technician.update_ticket', $ticket->id);
    } else {
        return redirect()->back();
    }


}
    }

