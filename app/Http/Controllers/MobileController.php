<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ticket;
use DB;
use Session;
use Hash;

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
        $tickets = Ticket::where('assigned_to', $request->input('id'))->get();
        return response()->json($tickets);
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
