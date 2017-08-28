<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Theme;
use Input;
use DB;

use App\Repositories\PrivilegeRepositoryInterface;
use DateTime;

class RegisterController extends ACMBaseController
{

    public function __construct(){
        parent::__construct();
    }
    
    public function saveTutor(Request $request){
     
         $time = date('YmdHis');
        $file = explode('.',$_FILES['img_card']['name']);
        $file = $time.'.'.end($file);
        $path = public_path('image_card');
        $request->file('img_card')->move($path,$file);

        $file1 = explode('.',$_FILES['img_profile']['name']);
        $file1 = $time.'.'.end($file1);
        $path1 = public_path('image_profile');
        $request->file('img_profile')->move($path1,$file1);

        $data = array();
        $data['username'] = $request->username;
        $data['email'] = $request->email;  
        $data['password'] = md5($request->password);
        $data['firstname'] = $request->firstname;
        $data['lastname'] = $request->lastname;
        $data['nickname'] = $request->nickname; 
        $data['birthday'] = $request->birthday;
        $data['id_card'] = $request->id_card;
        $data['gender'] = $request->gender;
        $data['age'] = $request->age;
        $data['img_card'] = 'image_card/'.$file;
        $data['img_profile'] = 'image_profile/'.$file1;
       // $bdate = explode('/', $request->birthday);
        $data['tel'] = $request->tel;
        $data['address'] = $request->address;
        $data['tutor_ref'] = $request->tutor_ref;
        $data['ref_relation'] = $request->ref_relation;
        $data['ref_tel'] = $request->ref_tel;
        $data['tutor_school'] = $request->tutor_school;
        $data['tutor_level'] = $request->tutor_level;
        $data['tutor_grade'] = $request->tutor_grade;
        
        DB::table('tutor')->insert($data);
        return $this->theme->scope('home.registersuccess')->render();
     }
     public function saveLearner(Request $request){
        
            $time = date('YmdHis');
         
   
           $file2 = explode('.',$_FILES['img_profile']['name']);
           $file2 = $time.'.'.end($file2);
           $path2 = public_path('image_profile');
           $request->file('img_profile')->move($path2,$file2);
   
           $data = array();
           $data['username'] = $request->username;
           $data['email'] = $request->email;  
           $data['password'] = md5($request->password);
           $data['firstname'] = $request->firstname;
           $data['lastname'] = $request->lastname;
           $data['nickname'] = $request->nickname; 
           $data['birthday'] = $request->birthday;
           $data['gender'] = $request->gender;
           $data['age'] = $request->age;
         
           $data['img_profile'] = 'image_profile/'.$file2;
          // $bdate = explode('/', $request->birthday);
           $data['tel'] = $request->tel;
           $data['address'] = $request->address;
           $data['learner_ref'] = $request->learner_ref;
           $data['id_card'] = $request->id_card;
           $data['ref_relation'] = $request->ref_relation;
           $data['ref_tel'] = $request->ref_tel;
           $data['school'] = $request->school;
           $data['learner_level'] = $request->learner_level;
           $data['grade'] = $request->grade;
           
           DB::table('learner')->insert($data);
           return $this->theme->scope('home.registersuccess')->render();
        }
    public function indexTutor(){
        $subject = DB::table('subjects') 
        ->get();
        $this->theme->set('subject', $subject);
        return $this->theme->scope('home.register_tutor')->render();
    }
    public function indexLearner(){
        $subject = DB::table('subjects') 
        ->get();
        $this->theme->set('subject', $subject);
        return $this->theme->scope('home.register_learner')->render();
    }

}
