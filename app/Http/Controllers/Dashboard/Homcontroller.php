<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Major;
use App\Models\Trainee;
use App\Models\University;
use Illuminate\Http\Request;

class Homcontroller extends Controller
{
   public function index(){
      $trainee=Trainee::all();
      $courses=Course::all();
      $majors=Major::all();
      $university=University::all();
    return view('dashboard.section.home.home',compact('trainee','courses','majors','university'));
   }
}
