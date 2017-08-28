<?php
Route::get('/_debugbar/assets/stylesheets', [
    'as' => 'debugbar-css',
    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@css'
]);

Route::get('/_debugbar/assets/javascript', [
    'as' => 'debugbar-js',
    'uses' => '\Barryvdh\Debugbar\Controllers\AssetController@js'
]);
Route::resource('/show_detail','scheduleController');
Route::resource('/profiletutor','ProfileController@indexTutor');
Route::resource('/historytutor','HistoryController@indexTutor');
Route::resource('/mycoursetutor','MyCourseController@indexTutor');

Route::resource('/profilelearner','ProfileController@indexLearner');
Route::resource('/historylearner','HistoryController@indexLearner');
Route::resource('/mycourselearner','MyCourseController@indexLearner');

Route::resource('/loginlearner','LoginController@indexLearner');
Route::resource('/logintutor','LoginController@indexTutor');
Route::resource('/editprofiletutor','EditController@indexTutor');

Route::resource('/admin','AdminController@index');

Route::resource('/createcourselearner', 'CourseController');
Route::resource('/createcoursetutor', 'CourseTutorController');

Route::resource('/registertutor', 'RegisterController@indexTutor');
Route::resource('/registerlearner', 'RegisterController@indexLearner');

Route::post('/registersavetutor', 'RegisterController@saveTutor');
Route::post('/registersave', 'RegisterController@saveLearner');




Route::group(['middleware' => ['web']], function () {
    Route::controller('/','MainController');
});

Route::group(['middleware' => ['web']], function () {
   // Route::('/','MainController');
   
    
});



Route::auth();

// Route::get('/home', 'HomeController@index');

// Route::get('/registertutor', function () {
//     return view('register_tutor');
// });
// Route::get('/registerlearner', function () {
//     return view('register_learner');
// });





