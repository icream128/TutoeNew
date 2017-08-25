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
                    ->select('subject','level','dayfull','name')
                    ->get() ;

        $this->theme->set('objData', $objData);
        return $this->theme->scope('home.index')->render();
    }

}
