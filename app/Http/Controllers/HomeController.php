<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // this method is solely responsible for denying access to pages unless a login has occured. can be used to block access to any page for non-registred or logged in users
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //  public function index()
    // {
    //     $user_id=auth()->user()->id;
    //     $user=User::find($user_id);
    //     return view('home')->with('jobs',$user->jobs);
    // }
       public function index()
    {
         $user_id=auth()->user()->id;
         $user=User::find($user_id);
         return view('home',[
        'jobs'=>$user->jobs,
         ]);
     }



}
