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
        return view('stats.overview');
    }

    public function getVisits()
    {
        $visits = DB::select(
            'select path, count(*) as num_visits from visits 
                where user_id = ' . Auth::id() . '
                group by path 
                order by num_visits desc'
        );
        echo json_encode($visits);
    }
}
