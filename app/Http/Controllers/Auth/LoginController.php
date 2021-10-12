<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showAdminLoginForm()
    {
        return view('admin.auth.login');
    }

    public function showUserLoginForm()
    {
        return view('user.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();
        if (Auth::attempt($validated, true)) {
            $request->session()->regenerate();
            return redirectAuthenticatedRoute();
        }

        return redirect()->back()->with('error', trans('validation.custom.login-fail'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $logoutRedirect = $request->segment(1) === 'admin' ? 'admin.login' : 'user.login';
        return redirect()->route($logoutRedirect);
    }
}
