<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentCreate(){
        return view('registration');
    }

    public function studentCreateSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required",
            "id"=>"required",
            'dob'=>'required',
            'email'=>'required|email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password'=>'required|min:8'
        ],
        ['name.required'=>"Please put you name here"]
    );
        $student = new  Student();
        $student->name = $request->name;
        $student->student_id = $request->id;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->password = $request->password;

        $student->save();

       return redirect()->route('studentCreatePage');
    }
    public function studentLogin(){
        return view('login');
    }
    public function studentLoginSubmitted(Request $request){
        $validate = $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);
        $student = Student::where('email', $request->email)->first();
        if($request->email === $student->email && $request->password === $student->password){
            return  redirect()->route('studentLoginPage');
        }
        else{
            $msg = "failed";
            return $msg;
        }




    }
}
