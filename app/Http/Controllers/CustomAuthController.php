<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ticket;
use DB;
use Session;
use Hash;

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

public function sysadmindashboard(){

  return view('system_admin.system_dashboard', [

      'users' =>User::all(),
  ]);
}





    //Add All User
    public function registerUser(Request $request){


           $request->validate([
          'region'=>'required',     
          'type'=>'required',
          'name'=>'required',
          'phone'=>'required',
          'email'=>'required |email|unique:users',
          'password'=>'required|min:5| max:12',


        ]);
      $user = new User();
      $user ->region = $request->region;
      $user ->type = $request->type;
      $user ->name = $request->name;
      $user ->phone = $request->phone;
      $user ->email = $request->email;
      $user ->password = Hash::make($request->password);
      $res = $user->save();
      if($res){
       return back()->with('success', 'User registered Successfuly');
      
      // return redirect()->route('system_admin.system_admin_dashboard'); 

      }else{
      return back()->with('fail', 'Something wrong');
      }
    
      }


//Admin Login

  public function loginAdmin(Request $request){


    $request->validate([
    
      'email'=>'required',
      'password'=>'required',
    ]);

    $user = User::where('email', '=', $request->email)->first();
    if ($user){
      if (Hash::check($request->password, $user->password)){
        if($user && $user->type === 'Admin'){



      $request->session()->put('loginId', $user->id);
      return redirect('admindashboard');

  }else{
    return back()->with('fail', 'Incorrect Password');
  }

}else{
  return back()->with('fail', 'This email is not an registered');
}
    }else{
      return back()->with('fail', 'Your not an Admin');
    }

  }

  //Tech Dashboard
  
  public function techdashboard(){


     // Get the logged-in technician
     $user = User::find(session('loginId'));
     $tickets = $user->assigned_to;
return view('technician.dashboard', ['tickets' => $tickets]);



      }
public function logout(){
  if(Session::has('loginId')){
    Session::pull('loginId');
    return view('admin.home');
  }
}

//Techician Login
  public function loginTech(Request $request){
    $request->validate([
    
      'email'=>'required',
      'password'=>'required',
    ]);

    $user = User::where('email', '=', $request->email)->first();
    if ($user){
      if (Hash::check($request->password, $user->password)){
        if($user && $user->type === 'Technician'){



      $request->session()->put('loginId', $user->id);
      return redirect('techdashboard');

  }else{
    return back()->with('fail', 'Incorrect login credentials');
  }

}else{
  return back()->with('fail', 'Incorrect login credentials');
}
    }else{
      return back()->with('fail', 'Inorrect login credentials');
    }

  }


  //Technician Logout


  public function Techlogout(){
    if(Session::has('loginId')){
      Session::pull('loginId');
      return view('technician.home');
    }
  }


  //System Admin Login 

  public function loginSystem(Request $request){
    $request->validate([
    
      'email'=>'required',
      'password'=>'required',
    ]);

    $user = User::where('email', '=', $request->email)->first();
    if ($user){
      if (Hash::check($request->password, $user->password)){
        if($user && $user->type === 'System Admin'){



      $request->session()->put('loginId', $user->id);
      return redirect('sysadmindashboard');

  }else{
    return back()->with('fail', 'Incorrect login credentials');
  }

}else{
  return back()->with('fail', 'Incorrect login credentials');
}
    }else{
      return back()->with('fail', 'Inorrect login credentials');
    }

  }
      
      
//Dashboard for displaying username
// public function dashboard(){

//   $data = array();
//   if(Session::has('loginId')){
//     $data = User::where('id', '=', Session::get('loginId'))->first();
//   }
//   return redirect('techdashboard', );
// }

public function systemdashboard(){


  return view('system_admin.system_admin_dashboard',[
    'users' => User::all(),
    'userInput' => '<script>alert("hello")</script>'
  ]);

}

public function update(Request $request, $id){
$users = User::find($id);
$users->region = $request->input('region');
$users->type = $request->input('type');
$users->region = $request->input('region');
$users->name = $request->input('name');
$users ->phone = $request->input('phone');
$users ->email = $request->input('email');
$users->update();
return redirect('sysadmindashboard');



}


public function edit($id){
  $users= User::find($id);
  return view('system_admin.user_edit', compact('users'));
}


public function delete($id){
  $delete =DB::table('users')
  ->where('id', $id)
  ->delete();
  return redirect('sysadmindashboard');

}
}