<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Log out user
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function perform()
    {
        Session::flush();

        Auth::logout();

        return redirect('/login');
    }
}
