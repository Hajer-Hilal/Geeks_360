<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Major;
use App\Models\Trainee;
use App\Models\University;


class LoginController extends Controller
{
    public function index()
    {  
        return view('websit-layout.login.index');
    }
    public function login(Request $request)
    {
       if($request->post('email')=='admin@gmail.com' && $request->post('password')==123456){
        $trainee=Trainee::all();
        $courses=Course::all();
        $majors=Major::all();
        $university=University::all();
        return view('dashboard.section.home.home',compact('trainee','courses','majors','university'));
        
       }
       else{
        return redirect()->route('dashboard.view');
       }
    }
}
