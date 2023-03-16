<?php

namespace App\Http\Controllers;
use DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $data = DB::table('users')->get();
        $userdate = DB::table('user_has_subjects')->get();
        return view('core\layouts\app',compact('data'))->with('userdate',$userdate);
    }

    public function update($id)
    {
        $data = DB::table('user_has_subjects')->get();
       $posts=User::findOrFail($id);
        return view('core\layouts\update',compact('data'))->with('posts',$posts);
    }
}
