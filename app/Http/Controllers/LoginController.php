<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

   public function loginActon(Request $request)
    {
        $credentialss = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        // dd($credentialss);
        if(Auth::attempt($credentialss)){
            if (Auth::user()->role == 'admin') {
                return redirect('dashboard');
            }else if (Auth::user()->role == 'petugas') {
                return redirect('dashboard');
            }else if(Auth::user()->role == 'user') {
                return redirect('');
            } 
        }else{
            return redirect("login");
        }
    }
}