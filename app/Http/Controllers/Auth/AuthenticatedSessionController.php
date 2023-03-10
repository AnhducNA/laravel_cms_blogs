<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthenticatedSessionController extends Controller
{
    public function create(Request $request)
    {
        return view('admin.auth.login');
    }
    function store(Request $request){
        $credentials = $request->validate([
            'email' => [],
            'password' => [Password::defaults()],
        ]);
        if (Auth::attempt($credentials)) {

            return redirect()->route('dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    function destroy(){
        dd('logout');
    }
}
