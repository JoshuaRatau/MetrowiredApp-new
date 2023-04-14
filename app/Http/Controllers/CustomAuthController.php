<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ticket;
use DB;
use Session;
use Hash;
use Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;

class CustomAuthController extends Controller
{


  public function admindashboard(){
    return view('admin.admin_dashboard',[
      'tickets' =>Ticket::all(),
    ]);
  }



    public function registration(){
        return view("auth.registration");
    }

    public function sysadmindashboard()
    {

        return view('system_admin.system_dashboard', [

            'users' => User::all(),
        ]);
    }


    //Add All User
    public function registerUser(Request $request)
    {


        $request->validate([
            'region' => 'required',
            'type' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required |email|unique:users',
            'password' => 'required|min:5| max:12',


        ]);
        $user = new User();
        $user->region = $request->region;
        $user->type = $request->type;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            
       return redirect('sysadmindashboard');

            // return redirect()->route('system_admin.system_admin_dashboard');

        } else {
            return back()->with('fail', 'Something wrong');
        }

    }


    //Admin Login

    public function loginAdmin(Request $request)
    {


        $request->validate([

            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                if ($user && $user->type === 'Admin') {

      $request->session()->put('loginId', $user->id);
      return redirect('admindashboard');

                } else {
                    return back()->with('fail', 'Incorrect Password');
                }

            } else {
                return back()->with('fail', 'This email is not an registered');
            }
        } else {
            return back()->with('fail', 'Your not an Admin');
        }

  }

  //Tech Dashboard

  public function techdashboard(){



    $tickets = Ticket::where('assigned_to', session('loginId'))->get();

    $username = array();
    if(Session::has('loginId')){
      $username = User::where('id', '=' , Session::get('loginId'))->first() ;
    }
    return view('technician.dashboard', compact( 'username', 'tickets'));



      }
public function logout(){
  if(Session::has('loginId')){
    Session::pull('loginId');
    return view('admin.home');
  }
}

    //Techician Login
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
      return redirect('techdashboard');

                } else {
                    return back()->with('fail', 'Incorrect login credentials');
                }

            } else {
                return back()->with('fail', 'Incorrect login credentials');
            }
        } else {
            return back()->with('fail', 'Inorrect login credentials');
        }

    }








    //Technician Logout


    public function Techlogout()
    {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return view('technician.home');
        }
    }


    //System Admin Login

    public function loginSystem(Request $request)
    {
        $request->validate([

            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                if ($user && $user->type === 'System Admin') {



                    $request->session()->put('loginId', $user->id);
                    return redirect('sysadmindashboard');

                } else {
                    return back()->with('fail', 'Incorrect login credentials');
                }

            } else {
                return back()->with('fail', 'Incorrect login credentials');
            }
        } else {
            return back()->with('fail', 'Inorrect login credentials');
        }

    }



public function systemdashboard(){


  return view('system_admin.system_admin_dashboard',[
    'users' => User::all(),
    'userInput' => '<script>alert("hello")</script>'
  ]);

    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->region = $request->input('region');
        $users->type = $request->input('type');
        $users->region = $request->input('region');
        $users->name = $request->input('name');
        $users->phone = $request->input('phone');
        $users->email = $request->input('email');
        $users->update();
        return redirect('sysadmindashboard');



    }


    public function edit($id)
    {
        $users = User::find($id);
        return view('system_admin.user_edit', compact('users'));
    }


    public function delete($id)
    {
        $delete = DB::table('users')
            ->where('id', $id)
            ->delete();
        return redirect('sysadmindashboard');

    }


    //Management Screens

    public function loginManagement(Request $request)
    {
        $request->validate([

            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                if ($user && $user->type === 'Management') {



                    $request->session()->put('loginId', $user->id);
                    return redirect('managementdashboard');

                } else {
                    return back()->with('fail', 'Incorrect login credentials');
                }

            } else {
                return back()->with('fail', 'Incorrect login credentials');
            }
        } else {
            return back()->with('fail', 'Inorrect login credentials');
        }

    }

public function managementdashboard(){
$data = array();
if(Session::has('loginId')){
  $data = User::where('id', '=',Session::has('loginId'))->first();


            //Counting
            $service = DB::table('tickets')->where('ticket_number', 'like', 'sr%')->count();
            $incident = DB::table('tickets')->where('ticket_number', 'like', 'in%')->count();
            $open = Ticket::where('status', 'Active')->count();
            $closed = Ticket::where('status', 'Complete')->count();
            $ticketCount = Ticket::count();
            $tickets = Ticket::all();


}
return view('management.management_dashboard', compact('data', 'service', 'incident' , 'open', 'closed', 'ticketCount', 'tickets'));


}

public function managementlogout(){
  if(Session::has('loginId')){
    Session::pull('loginId');
    return view('management.home');
  }
}

}
