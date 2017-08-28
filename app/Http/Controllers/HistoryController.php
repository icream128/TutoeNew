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

class HistoryController extends ACMBaseController
{

    public function __construct(){
        parent::__construct();
    }

    public function indexTutor(Request $request){
        //Get data from database
        $learnerschedule = DB::table('learner_schedule') 
        ->join('subjects','learner_schedule.subjects_id','=','subjects.subjects_id')
        ->join('levels','learner_schedule.levels_id','=','levels.levels_id')
        ->join('day','learner_schedule.day_id','=','day.day_id')
        ->join('status_sch','learner_schedule.status_sch_id','=','status_sch.status_sch_id')
        ->join('duration','learner_schedule.duration_id','=','duration.duration_id')
        ->join('learner','learner_schedule.learner_id','=','learner.learner_id')
        ->whereIn('learner_schedule.status_sch_id',[3,4])
        // ->where('learner_schedule.status_sch_id',4)
        ->where('learner_schedule.learner_id',5)
   
            ->get();
        
       
        //Set data to view
        $this->theme->set('learnerschedule', $learnerschedule);
       // dd($this->theme);
        return $this->theme->scope('home.history_tutor')->render();

    }
    public function indexLearner(Request $request){
        //Get data from database
        $tutorschedule = DB::table('tutor_schedule') 
        ->join('subjects','tutor_schedule.subjects_id','=','subjects.subjects_id')
        ->join('levels','tutor_schedule.levels_id','=','levels.levels_id')
        ->join('day','tutor_schedule.day_id','=','day.day_id')
        ->join('status_sch','tutor_schedule.status_sch_id','=','status_sch.status_sch_id')
        ->join('duration','tutor_schedule.duration_id','=','duration.duration_id')
        ->join('tutor','tutor_schedule.tutor_id','=','tutor.tutor_id')
        ->whereIn('tutor_schedule.status_sch_id',[3,4])
        // ->where('learner_schedule.status_sch_id',4)
        ->where('tutor_schedule.tutor_id',5)
   
            ->get();
        
       
        //Set data to view
        $this->theme->set('tutorschedule', $tutorschedule);
       // dd($this->theme);
        return $this->theme->scope('home.history_learner')->render();

    }
}
