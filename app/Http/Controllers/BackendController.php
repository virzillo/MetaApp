<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class BackendController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware(['role:admin|superadmin']);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function index()
    {
        $user=User::find(1);
        return view('backend.dashboard',compact('user'));
    }


}
