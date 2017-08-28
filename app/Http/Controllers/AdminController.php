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

class AdminController extends ACMBaseController
{

    public function __construct(){
        parent::__construct();
    }

    public function index(Request $request){

    
        return $this->theme->scope('home.admin')->render();
    }
}
