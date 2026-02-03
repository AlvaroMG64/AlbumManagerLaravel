<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Guardamos hora de login si no existe
        if (!$request->session()->has('login_time')) {
            $request->session()->put('login_time', now());
        }

        return view('dashboard', [
            'user' => Auth::user(),
            'login_time' => $request->session()->get('login_time')
        ]);
    }
}<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        if (!$request->session()->has('login_time')) {
            $request->session()->put('login_time', now());
        }

        $login_time = $request->session()->get('login_time');

        return view('dashboard', [
            'user' => $user,
            'login_time' => $login_time
        ]);
    }
}