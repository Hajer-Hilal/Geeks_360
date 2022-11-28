<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Major;
use App\Models\Trainee;
use App\Models\University;
use Illuminate\Http\Request;

class sectioncontroller extends Controller
{
   public function Student(){
    $trainee=Trainee::all();
    $courses=Course::all();
    $majors=Major::all();
    $university=University::all();
    return view('dashboard.section.home.home',compact('trainee','courses','majors','university'));
   }
   public function report(){
    $university=University::all();
   $trainee=Trainee::all();
   $courses= Course::all();
   $majors=Major::all();
   $count_university=[];
   $count_major=[];
   $count_male=[];
   $count_female=[];
   $university_count_all= University::all()->count();
    return view('websit-layout.report.index',compact('university','courses','majors','trainee',
    'count_university','count_major',
      'count_male','count_female'));
   }
   public  function signout(){
    return view('websit-layout.Home.index');
   }
}
