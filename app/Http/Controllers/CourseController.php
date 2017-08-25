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
use App\LearnerSchedule;

use App\Repositories\PrivilegeRepositoryInterface;
use DateTime;

class CourseController extends ACMBaseController
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
        $province = Province::orderBy('province_name','asc')->get();
        $amphur = Amphur::orderBy('amphur_name','asc')->get();
        $district = District::orderBy('district_name','asc')->get();

        //Set data to view
        $this->theme->set('subject', $subject);
        $this->theme->set('level', $level);
        $this->theme->set('day', $day);
        $this->theme->set('duration', $duration);
        $this->theme->set('province', $province);
        $this->theme->set('amphur', $amphur);
        $this->theme->set('district', $district);
        return $this->theme->scope('home.create_course')->render();
    }

    public function store(Request $request){

        $learner_schedule = new LearnerSchedule();

        //Mock up data to insert to database
        $learner_schedule->learner_id = 1 ;
        $learner_schedule->status_sch_id = 1 ;
        $learner_schedule->start_time_id = 1 ;
        $learner_schedule->end_time_id = 1 ;
        
        //Get data from view 
        $learner_schedule->day_id = $request->input('day');
        $learner_schedule->subjects_id = $request->input('subject');
        $learner_schedule->levels_id = $request->input('level');
        $learner_schedule->duration_id = $request->input('duration');
        $learner_schedule->save() ;
        
        return $this->theme->scope('home.success')->render();
    }

}
