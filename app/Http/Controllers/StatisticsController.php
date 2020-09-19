<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Bring in the model
use App\Visit;
// Bring in the helper methods class
use Illuminate\Support\Str;
// Bring in the authentication facade
use Illuminate\Support\Facades\Auth;
// Bring in the database facade to use raw sql queries
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
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

    public function index()
    {
        // $visits = Visit::all();
        $visits = DB::select(
            'select path, count(*) as num_visits from visits 
                group by path 
                order by num_visits desc'
        );
        return view('stats.overview')->with('visits', $visits);
    }
}
