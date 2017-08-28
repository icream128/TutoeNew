<?php

namespace App\Http\Controllers;

use Theme;
use Input;
use DB;

use App\Repositories\PrivilegeRepositoryInterface;
use DateTime;

class MainController extends ACMBaseController
{

    public function __construct(){
        parent::__construct();
    }
    

    public function getIndex(){
        $objData = DB::table('learner_schedule')
                    ->join('subjects','learner_schedule.subjects_id','=','subjects.subjects_id')
                    ->join('levels','learner_schedule.levels_id','=','levels.levels_id')
                    ->join('day','learner_schedule.day_id','=','day.day_id')
                    ->join('duration','learner_schedule.duration_id','=','duration.duration_id')
                    ->select('subject','level','dayfull','name','learner_schedule_id')
                    ->get() ;
        $objSubject = DB::table('subjects')->get();
        $objLevel = DB::table('levels')->get();
        $objDay = DB::table('day')->get();
        $objDuration = DB::table('duration')->get();
        $this->theme->set('objData', $objData);
        $this->theme->set('objSubject', $objSubject);
        $this->theme->set('objLevel', $objLevel);
        $this->theme->set('objDay', $objDay);
        $this->theme->set('objDuration', $objDuration);
        return $this->theme->scope('home.index')->render();
    }

    public function login(){
        return $this->theme->scope('home.index')->render();
    }

}
