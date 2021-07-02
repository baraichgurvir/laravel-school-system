<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function Login() {
        return view("admin.login");
    }

    public function Register() {
        return view("admin.register");
    }

    public function createAdmin(Request $req, Admin $admin) {
        $req->validate([
            "username" => "required|min:3|max:255",
            "email" => "required|unique:admins,email",
            "password" => "required|min:5|max:16"
        ]);

        $admin->username = $req->username;
        $admin->email = $req->email;
        $admin->password = bcrypt($req->password);
        $admin->save();

        return redirect()->back();
    }

    public function check(Request $req)
    {
        $status = Auth::guard("admin")->attempt([ "email" => $req->email , "password" => $req->password ]);
        
        if($status){
            return redirect()->route("admin.home");
        }
    
        return redirect()->back();
    }

    public function home() {
        return view("admin.home");
    }

    public function profile() {
        return view("admin.profile");
    }

    public function logout() {
        Auth::guard("admin")->logout();
        return redirect()->route("admin.login");
    }
}
