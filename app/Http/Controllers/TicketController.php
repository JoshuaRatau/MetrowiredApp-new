<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;


class TicketController extends Controller
{

    public function ticket(){
        return view("admin.ticketlog");   
    }


    //
    public function registerTicket(Request $request){
        $request->validate([
        'region'=>'required',
        'network_type'=>'required',
        'affected_user'=>'required',
        'ticket_number'=>'required',
        'contact'=>'required',
        'title'=>'required',
        'technician'=>'required',
        'alternate_contact'=>'required',
        // 'description'=>'required',
        ]);
        $ticket = new Ticket();
        $ticket ->region = $request->region;
        $ticket ->network_type = $request->network_type;
        $ticket ->affected_user = $request->affected_user;
        $ticket ->ticket_number = $request->ticket_number;
        $ticket ->contact = $request->contact;
        $ticket ->title = $request->title;
        $ticket ->technician = $request->technician;
        $ticket ->alternate_contact = $request->alternate_contact;
        $ticket ->description = $request->description;
        $res = $ticket->save();
        if($res){
            return back()->with('success', 'Ticket logged Successfuly');
           
           // return redirect()->route('system_admin.system_admin_dashboard'); 
     
           }else{
           return back()->with('fail', 'Something wrong');
           }
         
           }

          public function techdashboard(){
            return view('technician.dashboard', [
                'tickets' =>Ticket::all(),
            ]);
          }

          

    }

