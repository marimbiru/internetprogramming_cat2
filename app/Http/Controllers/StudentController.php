<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function show_students(){
        
        $students=Student::all();
        return view('94622/allstudents',['students'=>$students]);

    }

    public function student_fees($id){

        $student=Student::find($id);
        return view('94622/studentfees',['student'=>$student]);

    }

    public function newstudent(){
        return view('94622/students');
    }

    public function student_editor(Request $request){
        $this->validate($request, array(
            'student_number'=>'numeric|required|unique:students,student_number',
            'student_name'=>'required',
            'address'=>'required',
        ));

        $student=new Student;

        $student->student_number=$request->student_number;
        $student->student_name=$request->student_name;
        $student->address=$request->address;

        $student->save();

        return redirect('/');
    }

    public function studentfee($id){

        $student=Student::findby($id);
        return view('94622/studentfees',['student'=>$student]);

    }

    public function find_student(Request $request){
        $this->validate($request, array(
            'name'=>'required'
        ));
        $name=$request->name;

        $students=Student::where('student_name','LIKE','%',$name,'%');

        return view('allstudents',['students'=>$students]);
    }
}
