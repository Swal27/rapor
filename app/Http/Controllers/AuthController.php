<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use app\Models\User;
use app\Models\Siswa;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function proses_login(Request $request){
        // dd($request->all());
        $ceklogin = $request->only('username', 'password');
        if (Auth::attempt($ceklogin)){

            $session = User::all()->where('username', $request->username)->first();
           
            // @dd($session->role_id);

            $request->session()->regenerate();
            session([
                'nama' => $session->username,
                'id' => $session->id,
                'role_user'=> $session->role,
            ]);


            if ($session->role == 1) {
                return redirect()->intended('admin\dashboard');
            } else{
                return redirect()->intended('user\dashboard');
            }

        }

    return redirect('login')->with('flash_message_error', 'Username atau Password Anda Salah!');
    }
    
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }
}
