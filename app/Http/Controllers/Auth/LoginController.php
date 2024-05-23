<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('name_email', 'password');
    
        if (Auth::attempt(['email' => $credentials['name_email'], 'password' => $credentials['password']]) ||
            Auth::attempt(['name' => $credentials['name_email'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
    
            return redirect()->intended('/posts');
        }
    
        return back()->withErrors([
            'name_email' => 'The provided credentials do not match our records.',
        ]);
    }    

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}