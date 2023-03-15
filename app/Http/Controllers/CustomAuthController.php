<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Hash;
class CustomAuthController extends Controller
{


    public function registration(){
        return view("auth.registration");
    }
    

    
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
      return redirect('dashboard');

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
      return view('technician.dashboard');

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



  public function loginManager(Request $request){
    $request->validate([
    
      'email'=>'required',
      'password'=>'required',
    ]);

    $user = User::where('email', '=', $request->email)->first();
    if ($user){
      if (Hash::check($request->password, $user->password)){
        if($user && $user->type === 'Techician'){



      $request->session()->put('loginId', $user->id);
      return view('technician.dashboard');

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
      
      

public function dashboard(){

  $data = array();
  if(Session::has('loginId')){
    $data = User::where('id', '=', Session::get('loginId'))->first();
  }
  return view("admin.admin_dashboard" , compact('data'));
}

public function systemdashboard(){


  return view('system_admin.system_admin_dashboard',[
    'users' => User::all(),
    'userInput' => '<script>alert("hello")</script>'
  ]);

}

public function edit(User $user){


  return view('system_admin.user_edit',[
    'user' => ($user)
   
  ]);

}


public function logout(){
  if(Session::has('loginId')){
    Session::pull('loginId');
    return view('admin.home');
  }
}


}
