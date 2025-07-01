<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

use function PHPUnit\Framework\returnSelf;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|string|max:50',
        ]);
        if (Auth::attempt($request->only('email', 'password'), $request->remember)) {
            if (Auth::user()->role == 'member') return redirect('/dashboard');
            return redirect('/admin');
        }
        return back()->with('failed', 'Data anda salah');
    }

    function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|string|min:8|max:50',
            'confirm_password' => 'required|string|min:8|max:50|same:password',
        ]);
        $request['status'] = 'verify';
        $user = User::create($request->all());
        Auth::login($user);
        return redirect('/dashboard');
    }

    public function google_redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function google_callback()
    {
        $googleUser = Socialite::driver('google')->user();
        dd($googleUser);
        //jalan kan waktu di domain, jika pakai herd tidak bisa serve autr nya di google cloud
        $user = User::whereEmail($googleUser->email)->first();
        if (!$user) {
            $user = User::create(['name' => $googleUser->name, 'email' => $googleUser->email, 'status' => 'active']);
        }
        if ($user && $user->status == 'banned') {
            return redirect('/register')->with('failed', 'Akun anda telah di banned');
        }
        if ($user && $user->status == 'verify') {
            $user->update(['status' => 'active']);
        }
        Auth::login($user);
        if ($user->role == 'member') return redirect('/dashboard');
        return redirect('/admin');
    }

    public function logout()
    {
        Auth::logout(Auth::user());
        return redirect('/admin/auth/login');
    }
}
