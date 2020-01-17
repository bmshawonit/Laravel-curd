<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentManagement extends Controller
{
    //all student data
    public function allStudentData(){

    	$data = Student::all();

    	return view('all_student' , compact('data'));
    }
    //add new student
    public function addNewStudent(){

    	return view('add_student');
    }
    //value receive and data send to db
    public function valueReceiveToDb(Request $value){


    	$img = $value -> file('photo');

    	$img_name = md5(time().rand()).".". $img ->getClientOriginalExtension();

    	$img -> move(public_path('profile_photo'), $img_name);

    	$student_data = new Student ([
    	
    	'full_name' => $value -> get('fname'),
    	'email' => $value -> get('email'),
    	'photo' => $img_name,
		]);

    	$student_data -> save();

    	return redirect() -> back();
    }

    //view single profile

    public function viewStudentProfile($id){

    	$singledata= Student::find($id);

    	return view('single_student' , compact('singledata'));
    }

    //edit student
    public function editSingleStudent($id){

    	$editdata = Student::find($id);

    	return view('edit_student' , compact('editdata'));
    }

	//delete student
    public function delSingleStudent($id){
    	
    	$delstudata = Student::find($id);

    	$delstudata -> delete();

    	return redirect() -> back();
    }

    public function valueUpdateToDb(Request $value, $id){

       	$img = $value -> file('photo');

    	$img_name = md5(time().rand()).".". $img ->getClientOriginalExtension();

    	$img -> move(public_path('profile_photo'), $img_name);

    	$update_data = Student::find($id);
    	
    	$update_data -> full_name = $value -> get('fname');
    	$update_data -> email = $value -> get('email');
    	$update_data -> photo = $img_name;
		

		$update_data -> save();

    	return redirect() -> back();
    }
}
