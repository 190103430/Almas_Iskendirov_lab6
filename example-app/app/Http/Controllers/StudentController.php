<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
   
}

class StudentController extends Controller
{
 
 public function get_student(){
     static $student = array(0=>"Almas",1=>"Yerbol");
     return $student;
 }
 
 public function name($id){
    $student = $this->get_student();
    return view('name', ['name'=>$student[$id]]);
 }


}
public function date($date){
    return view('date')->with('date',$date);
}
public function age($age){
    return view('age',compact('age'));
}