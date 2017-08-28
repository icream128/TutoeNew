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

class ProfileController extends ACMBaseController
{

    public function __construct(){
        parent::__construct();
    }

    public function indexTutor(Request $request){
        //Get data from database
        $tutor = DB::table('tutor') 
            ->where('tutor_id',5)
            ->get();
       
        //Set data to view
        $this->theme->set('tutor', $tutor);
       // dd($this->theme);
        return $this->theme->scope('home.profile_tutor')->render();
    }
    public function indexLearner(Request $request){
        //Get data from database
        $learner = DB::table('learner') 
            ->where('learner_id',1)
            ->get();
       
        //Set data to view
        $this->theme->set('learner', $learner);
       // dd($this->theme);
        return $this->theme->scope('home.profile_learner')->render();
    }
}
