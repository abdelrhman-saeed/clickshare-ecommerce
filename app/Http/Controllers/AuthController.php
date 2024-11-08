<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @return RedirectResponse
     */
    public function signin(Request $request): RedirectResponse
    {
        $creds = $request->validate([ 'email' => 'required|email', 'password' => 'required' ]);

        if (Auth::attempt($creds))
        {
            $request->session()
                    ->regenerate();

            return redirect()->intended(route('products.index'));
        }

        return back()
                    ->withErrors(['email' => 'the provided credentials do not match our records'])
                    ->onlyInput('email');
    }
    /**
     * @return RedirectResponse
     */
    public function signout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('signing');
    }
}
