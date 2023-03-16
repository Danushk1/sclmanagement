<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;
use DB;

class PdfController extends Controller
{    
    public function index(Request $request)
	{
        $mark = DB::table('user_has_subjects')->get();
        $users = User::get();
  
        $data = [
            'title' => 'Welcome to LaravelTuts.com',
            'date' => date('m/d/Y'),
            'mark' => $mark
        ]; 
            
        $pdf = PDF::loadView('result', $data);
     
        return $pdf->download('laraveltuts.pdf');
	}
}
