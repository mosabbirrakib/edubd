<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('frontend.pages.home');

Route::group(['middleware' => ['web','auth']], function(){

    Route::get('/', function () {
    if (Auth::user()->admin == 0) {
    	return view('frontend.pages.home');
    }else{
    	//$users['users'] = \App\User::all();
    	$users = \App\User::first();
    	return view('backend.pages.adminhome', compact('users'));
    }
    });

});

/*Admin Student-Data Route Group*/
Route::group(['prefix' => 'admins'],function(){
   Route::get('/','Backend\PagesController@student')->name('admin.student-data');
});

/*Admin Faculty-Data Route Group*/
Route::group(['prefix' => 'admins'],function(){
   Route::get('/faculty/','Backend\PagesController@faculty')->name('admin.faculty-data');
});

/*Student Route Group*/
Route::group(['prefix' => 'students'],function(){
   Route::get('/','Backend\StudentsController@index')->name('students.index');
   Route::get('/create','Backend\StudentsController@create')->name('students.create');
   Route::get('/edit/{id}','Backend\StudentsController@edit')->name('students.edit');
   Route::post('/store','Backend\StudentsController@store')->name('students.store');
   Route::post('/student/edit/{id}','Backend\StudentsController@update')->name('students.update');
   Route::post('/delete/{id}','Backend\StudentsController@delete')->name('students.delete');
});

/*Faculty Route Group*/
Route::group(['prefix' => 'faculty'],function(){
   Route::get('/','Backend\FacultyController@index')->name('faculty.index');
   Route::get('/create','Backend\FacultyController@create')->name('faculty.create');
   Route::get('/edit/{id}','Backend\FacultyController@edit')->name('faculty.edit');
   Route::post('/store','Backend\FacultyController@store')->name('faculty.store');
   Route::post('/faculties/edit/{id}','Backend\FacultyController@update')->name('faculty.update');
   Route::post('/delete/{id}','Backend\FacultyController@delete')->name('faculty.delete');
});

/*Course Route Group*/
Route::group(['prefix' => 'course'],function(){
   Route::get('/','Backend\CourseController@index')->name('course.index');
   Route::get('/create','Backend\CourseController@create')->name('course.create');
   Route::get('/edit/{id}','Backend\CourseController@edit')->name('course.edit');
   Route::post('/store','Backend\CourseController@store')->name('course.store');
   Route::post('/courses/edit/{id}','Backend\CourseController@update')->name('course.update');
   Route::post('/delete/{id}','Backend\CourseController@delete')->name('course.delete');
});

/*Time Slot Route Group*/
Route::group(['prefix' => 'time_slot'],function(){
   Route::get('/','Backend\TimeSlotController@index')->name('time_slot.index');
   Route::get('/create','Backend\TimeSlotController@create')->name('time_slot.create');
   Route::get('/edit/{time_slot_id}','Backend\TimeSlotController@edit')->name('time_slot.edit');
   Route::post('/store','Backend\TimeSlotController@store')->name('time_slot.store');
   Route::post('/time_slots/edit/{time_slot_id}','Backend\TimeSlotController@update')->name('time_slot.update');
   Route::post('/delete/{time_slot_id}','Backend\TimeSlotController@delete')->name('time_slot.delete');
});

/*Section Route Group*/
Route::group(['prefix' => 'section'],function(){
   Route::get('/','Backend\SectionController@index')->name('section.index');
   Route::get('/create','Backend\SectionController@create')->name('section.create');
   Route::get('/edit/{section_id}','Backend\SectionController@edit')->name('section.edit');
   Route::post('/store','Backend\SectionController@store')->name('section.store');
   Route::post('/sections/edit/{section_id}','Backend\SectionController@update')->name('section.update');
   Route::post('/delete/{section_id}','Backend\SectionController@delete')->name('section.delete');
});

/*Fontend site Registration Route Group*/
Route::group(['prefix' => 'registration'],function(){
   Route::get('/section_selection','Frontend\RegistrationController@section_selection')->name('section_selection');
   Route::get('/pre_advising','Frontend\RegistrationController@pre_advising')->name('pre_advising');
   Route::get('/result','Frontend\RegistrationController@result')->name('result');
});

/*Backend site Registration Route Group*/
Route::group(['prefix' => 'registrations'],function(){
   Route::get('/','Backend\RegistrationController@index')->name('registration.index');
   Route::get('/create','Backend\RegistrationController@create')->name('registration.create');
   Route::get('/edit/{registration_id}','Backend\RegistrationController@edit')->name('registration.edit');
   Route::post('/store','Backend\RegistrationController@store')->name('registration.store');
   Route::post('/registrations/edit/{registration_id}','Backend\RegistrationController@update')->name('registration.update');
   Route::post('/delete/{registration_id}','Backend\RegistrationController@destroy')->name('registration.delete');
});

/*Result Route Group*/
Route::group(['prefix' => 'results'],function(){
   Route::get('/','Backend\ResultController@index')->name('result.index');
   Route::get('/create','Backend\ResultController@create')->name('result.create');
   Route::post('/store','Backend\ResultController@store')->name('result.store');
   Route::get('/edit/{result_id}','Backend\ResultController@edit')->name('result.edit');
   Route::post('/results/edit/{result_id}','Backend\ResultController@update')->name('result.update');
   Route::post('/delete/{result_id}','Backend\ResultController@delete')->name('result.delete');
});

//Logout
Route::post('/logout/submit','Auth\LoginController@logout')->name('logout');

Route::get('/registration','Frontend\PagesController@registration')->name('registration');

//Student Profile Update
Route::get('/profile_edit','Frontend\PagesController@profile_edit')->name('profile_edit');
Route::post('/profile_update','Frontend\PagesController@profile_update')->name('profile_update');

//Faculty Profile Update
Route::get('/faculty/profile_edit','Backend\PagesController@profile_edit')->name('faculty.profile_edit');
Route::post('/faculty/profile_update','Backend\PagesController@profile_update')->name('faculty.profile_update');
