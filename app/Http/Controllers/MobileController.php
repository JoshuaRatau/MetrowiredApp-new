<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ticket;
use DB;
use Session;
use Hash;
use Illuminate\Support\Facades\Log;

class MobileController extends Controller
{
    //Methods for technician Login,Logout

    //Login for technician
    public function loginTech(Request $request)
    {

        $request->validate([

            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                if ($user && $user->type === 'Technician') {



                    $request->session()->put('loginId', $user->id);

                    return response()->json(['success' => 'User logged in successful', 'user' => $user]);

                } else {
                    return response()->json(['fail' => 'Incorrect login credentials']);
                }

            } else {
                return response()->json(['fail' => 'Incorrect login credentials']);
            }
        } else {
            return response()->json(['fail' => 'Incorrect login credentials']);
        }
    }
    //Logout for technician
    public function Techlogout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return view('technician.home');
        }
    }
    //details for technician
    public function ticketList(Request $request)
    {
        $tickets = Ticket::where('assigned_to', $request->input('id'))->whereNotIn('status', ['Complete'])->get();
        return response()->json($tickets);
    }

    public function ticketDetails($id)
    {
        $ticket = Ticket::find($id);
        if (!$ticket) {
            return response()->json(['error' => 'Ticket not found'], 404);
        }
        return response()->json($ticket);
    }

    public function updateStatus(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->status = $request->status;
        $ticket->save();

        return response()->json([
            'message' => 'Ticket status updated successfully'
        ]);
    }

    public function updateComplete(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->response = $request->response;
        $ticket->breaks_number = $request->breaks_number;
        $ticket->comment = $request->comment;
        $ticket->save();

        return response()->json([
            'message' => 'Ticket completed successfully'
        ]);
    }

    public function countTickets(){
        $activeTicketsCount = Ticket::where('status', 'Active')->count();
        return response()->json(['count' => $activeTicketsCount]);
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
