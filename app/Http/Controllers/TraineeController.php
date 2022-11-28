<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Major;
use App\Models\Trainee;
use App\Models\University;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TraineeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $university=University::all();
        $courses= Course::all();
        $majors=Major::all();
        return view('websit-layout.register.index',compact('university','courses','majors'));
    }

    public function index_add()
    {
        $university=University::all();
        $courses= Course::all();
        $majors=Major::all();
        return view('websit-layout.add-student.index',compact('university','courses','majors'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'trainee_id' => ['required'],
            'full_name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'gender' => ['required'],
            'major' => ['required'],
            'University_id' => ['required'],
            'Course_id' => ['required'],
        ]);

        $tainee = new Trainee();
       
        $tainee->trainee_id = $request->post('trainee_id');
        $tainee->full_name = $request->post('full_name');
        $tainee->email = $request->post('email');
        $tainee->phone = $request->post('phone');
        $tainee->gender = $request->post('gender');
        $tainee->major = $request->post('major');
        $tainee->University_id = $request->post('University_id');
       $tainee->Course_id = $request->post('Course_id');

        $tainee->save();
        return redirect()->route('home.view');
    }
 /*-----------------------------------------------------------*/
 public function store_add(Request $request)
    {
        $request->validate([
            'trainee_id' => ['required'],
            'full_name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'gender' => ['required'],
            'major' => ['required'],
            'University_id' => ['required'],
            'Course_id' => ['required'],
        ]);

        $tainee = new Trainee();
       
        $tainee->trainee_id = $request->post('trainee_id');
        $tainee->full_name = $request->post('full_name');
        $tainee->email = $request->post('email');
        $tainee->phone = $request->post('phone');
        $tainee->gender = $request->post('gender');
        $tainee->major = $request->post('major');
        $tainee->University_id = $request->post('University_id');
       $tainee->Course_id = $request->post('Course_id');

        $tainee->save();
        return redirect()->route('dashboard.view');
    }



 /*----------------------------------------------------------*/
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function show(Trainee $trainee)
    {
        $university=University::all();
        $courses= Course::all();
        $majors=Major::all();
        $trainee=Trainee::all();
        $count_university=[];
        $university_count_all= University::all()->count();
       for($i=0; $i< $university_count_all ;$i++){
        $count_university[$i]= Trainee::where('University_id',$i+1)->count();
       }
       $count_major=[];
       $major_count_all= Major::all()->count();
       for($i=0; $i< $major_count_all ;$i++){
        $count_major[$i]= Trainee::where('major',$i+1)->count();
       }

       $count_male=[];
       $count_female=[];
     
       for($i=1; $i <= 7  ;$i++){
        $count_male[$i]=Trainee::where('gender','male')->where('Course_id',$i)->count();
       }

       for($i=1; $i <= 7  ;$i++){
        $count_female[$i]=Trainee::where('gender','female')->where('Course_id',$i)->count();
       }
    
        return view('websit-layout.report.index',compact('university','courses','majors','trainee',
                                                         'count_university','count_major',
                                                           'count_male','count_female'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
  
     public function edit(Trainee $trainee,$id)
    { $university=University::all();
        $courses= Course::all();
        $major=Major::all();
        $tainee = Trainee::find($id);

                return view('dashboard.section.home.edit',compact('courses','major','university'))
                     ->with('tainee', [
                     'id' => $id,
                    'trainee_id'    => $tainee->trainee_id ,
                    'full_name' =>$tainee->full_name ,
                    'email' => $tainee->email  ,
                    'phone' => $tainee->phone ,
                    'gender' => $tainee->gender ,
                    'major'   => $tainee->major,
                    'University_id'  => $tainee->University_id ,
                    'Course_id'  => $tainee->Course_id ,
                   
                    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainee $trainee,$id)
    {$university=University::all();
        $courses= Course::all();
        $major=Major::all();
        $tainee = Trainee::find($id);
       
        $request->validate([
                    'trainee_id'=>['required'],
                    'full_name' => ['required'],
                    'email' => ['required','email'],
                    'phone' => ['required'],
                    'gender' => ['required'],
                    'major' => ['required'],
                    'Course_id' => ['required'],
                    'University_id' => ['required'],
                  
                ]);
               Trainee::where('id', $id)->update([
                    'trainee_id' =>$request->post('trainee_id'),
                    'full_name' => $request->post('full_name'),
                    'email' => $request->post('email'),
                    'phone' => $request->post('phone'),
                    'gender' => $request->post('gender'),
                    'major' => $request->post('major'),
                    'Course_id' => $request->post('Course_id'),
                    'University_id' => $request->post('University_id'),
                 
                 ]);
        
                 return redirect()->route('dashboard.student.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trainee  $trainee
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        

        $tainee = Trainee::find($id);

        if (!$tainee) {
            abort(404);
        }

      
       Trainee::destroy($id);

        return redirect()->route('dashboard.view');

        
     }
}
