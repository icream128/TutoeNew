<?php

namespace App\Http\Controllers;
use Theme;
use App\Http\Requests;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->theme->scope('home.register_learner')->render();
    }
}
