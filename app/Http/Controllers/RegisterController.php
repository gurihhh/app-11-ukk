<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\FlareClient\View;


class RegisterController extends Controller
{
    // ...
    
    public function store(Request $request)
    {
        $validated = $request-> validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',

        ]);
        if ($validated){
       $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // if (Auth::attempt(['email' => $user->email, 'password' => $request->password])) {

            return redirect()->intended('/login');
        }
    }
    public function create() {
        return view('auth.register');
    }
}
