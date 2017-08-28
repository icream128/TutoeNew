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
use DB;

use App\Repositories\PrivilegeRepositoryInterface;
use DateTime;

class scheduleController extends ACMBaseController
{

    public function __construct(){
        parent::__construct();
    }

    public function index(Request $request){
        //Get data from database
        $learnerschedule = DB::table('learner_schedule') 
            ->join('subjects','learner_schedule.subjects_id','=','subjects.subjects_id')
            ->join('levels','learner_schedule.levels_id','=','levels.levels_id')
            ->join('day','learner_schedule.day_id','=','day.day_id')
            ->join('duration','learner_schedule.duration_id','=','duration.duration_id')
            ->join('learner','learner_schedule.learner_id','=','learner.learner_id')
            ->where('learner_schedule_id',$request->schedule_id)
            ->get();
       // dd($learnerschedule);
        $subject = Subject::orderBy('subject','asc')->get();
        $level = Level::orderBy('levels_id','asc')->get();
        $day = Day::orderBy('day_id','asc')->get();
        $duration = Duration::orderBy('duration_id','asc')->get();
        $province = Province::orderBy('province_name','asc')->get();
        $amphur = Amphur::orderBy('amphur_name','asc')->get();
        $district = District::orderBy('district_name','asc')->get();

        //Set data to view
        $this->theme->set('learnerschedule', $learnerschedule);
        $this->theme->set('subject', $subject);
        $this->theme->set('level', $level);
        $this->theme->set('day', $day);
        $this->theme->set('duration', $duration);
        $this->theme->set('province', $province);
        $this->theme->set('amphur', $amphur);
        $this->theme->set('district', $district);
       // dd($this->theme);
        return $this->theme->scope('home.show_detail')->render();
    }

   
}
