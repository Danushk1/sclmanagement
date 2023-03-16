<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class SubjectController extends Controller
{

    public function store(Request $request)
    {

        
        $table_name = "user_has_subjects";
        $subject = $request->subject;
        $marks = $request->marks;
        $useremail = $request->id;

        $save = DB::connection('mysql')->table($table_name)->insert(
            array(


                'subjects'           => $subject,
                'marks'              => $marks,
                'users_email'        => $useremail,

            )
            );
            
            return redirect()->back();
    }


    public function delete(Request $request)
    {
        $id=$request->id;
    $tasks=$request->user_has_subjects;

    $delete = DB::connection('mysql')
          ->table("user_has_subjects")
          ->where('users_email',$id)
          ->delete();
          if($delete){
            $user = User::find($id)->delete();
            return redirect()->back();
     
           }
           else{
            return redirect('/failed');
           }

      
    }
}
