<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class MainController extends Controller
{
   function login() {
       return view('auth.login');
   }

   function adminhome() {
    return view('auth.adminhome');
}
   function register() {
    return view('auth.register');
}
    function save(Request $request){
        //validates requests
        $request->validate([
            'username'=>'required',
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'mobile'=>'required',
            'address'=>'required',
            'password'=>'required|min:5|max:15'
        ]);
        //insertion into  database
            $admin =new Admin;
            $admin->username= $request->username;
            $admin->name= $request->name;
            $admin->email= $request->email;
            $admin->mobile= $request->mobile;
            $admin->address= $request->address;
            $admin->password=Hash::make($request->password);

            $save = $admin->save();

            if($save){
                return back()->with ('Success','New User has been successfully created');
            }else{
                return back()->with ('Fail','Something went wrong, try again later');
            }
    }
    function check(Request $request) {
        //validates requests
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:15'
        ]);

        $userInfo = Admin::where('email','=',$request->email)->first();
        if($request->email=='admin123@gmail.com'&& $request->password=='admin'){
                return view('admin/adminhome');
        }else{
            if(!$userInfo){
                return back()-> with ('fail', 'We dont recognize your email');
            }else {
                //check password
                if(Hash::check($request->password,$userInfo->password)){
                    $request->session()->put('LoggedUser',$userInfo->id);
                    return redirect('/home');
                }else {
                    return back()-> with ('fail', 'Incorrect Password');
                }
            }
        }
    }
    function logout() {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        
        }else{
            return redirect('/auth/login');
        }
    }
    function dashboard(Request $request){
        $data=['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('home',$data);
    }

}
 

