<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vessel;
use App\Models\User;
use App\Models\Company;
use Carbon\Carbon;

class HomeController extends Controller
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
        $date = Carbon::now();
        $now = Carbon::now()->toDateString();
        $now_sub_90 = Carbon::parse($date)->subDays(90)->toDateString();
        
        $vessels = Vessel::orderBy('cos_expiry_date', 'ASC')->get();

        $countUsers = User::count();
        $countCompanys = Company::count();
        $countVessels = Vessel::count();
        $countVesselExpiry = Vessel::whereDate('cos_expiry_date', '<=', $now)->count();

        return view('home', compact([
            'vessels', 
            'countUsers', 
            'countCompanys', 
            'countVessels', 
            'countVesselExpiry',
            'now', 
            'now_sub_90'
        ]));
    }
}
