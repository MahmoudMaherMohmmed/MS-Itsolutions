<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\ClientTypeEnum;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ReportAccident;
use App\Models\User;

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
        return redirect()->route('login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $users = User::latest()->limit(5)->get();
        $users_count = User::count();

        return view('dashboard.index', compact('users', 'users_count'));
    }
}