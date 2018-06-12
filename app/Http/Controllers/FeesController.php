<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;
use App\Student;

class FeesController extends Controller
{
    public function show_fees(){

        $all_fees=Fees::all();
        return view('94622/allfees',['all_fees'=>$all_fees]);
    }
    
    public function new_fees(){
        return view('94622/fees');
    }

    public function fees_editor(Request $request){
        $this->validate($request,array(
            'student_number'=>'numeric|required|exists:students,student_number',
            'amount'=>'required'
        ));

        $student_number=$request->student_number;
        $student=Student::select('id')->where('student_number','=',$student_number)->get();

        // $student_id=(int)$student;

        // return ($student_id);  
        $new_fee= new Fees;
        $new_fee->student_id=$student[0]["id"];
        $new_fee->amount=$request->amount;
        $new_fee->save();

        return redirect('/');
    }
}
