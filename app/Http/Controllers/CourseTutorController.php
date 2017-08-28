<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Theme;
use Input;
use App\Subject;
use App\Level;
use App\Day;
use App\Duration;
use App\Province;
use App\Amphur;
use App\District;
use App\TutorSchedule;
use Session;

use App\Repositories\PrivilegeRepositoryInterface;
use DateTime;

class CourseTutorController extends ACMBaseController
{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        //Get data from database
        $subject = Subject::orderBy('subject','asc')->get();
        $level = Level::orderBy('levels_id','asc')->get();
        $day = Day::orderBy('day_id','asc')->get();
        $duration = Duration::orderBy('duration_id','asc')->get();
      

        //Set data to view
        $this->theme->set('subject', $subject);
        $this->theme->set('level', $level);
        $this->theme->set('day', $day);
        $this->theme->set('duration', $duration);

        return $this->theme->scope('home.create_course_tutor')->render();
    }

    public function store(Request $request){
        $tutor_schedule = new TutorSchedule();

        //Mock up data to insert to database
 
        $tutor_schedule->status_sch_id = 1 ;
     
       

        //Get data from view 

        $tutor_schedule->day_id = $request->input('day');
        $tutor_schedule->subjects_id = $request->input('subject');
        $tutor_schedule->levels_id = $request->input('level');
        $tutor_schedule->duration_id = $request->input('duration');
        $tutor_schedule->save() ;
        
        return $this->theme->scope('home.success')->render();
    }

}
