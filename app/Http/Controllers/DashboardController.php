<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Bring in the authentication facade
use Illuminate\Support\Facades\Auth;
// Bring in the user model
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get the currently authenticated user.
        $user = Auth::user();

        /*
            Pass in the view the user's articles (thanks to the methods enabled by the relationship).
        */
        return view('dashboard')->with('articles', $user->articles);
    }
}
