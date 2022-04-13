<?php

use App\Http\Controllers\admin\adminfController;
use App\Http\Controllers\admin\school\schoolController;
use App\Http\Controllers\admin\studentController;
use App\Http\Controllers\admin\teachers\tearchersController;
use App\Http\Controllers\event\enventController;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\student\studentfrentendController;
use App\Http\Controllers\hostel\hostelController;
use App\Http\Controllers\login\loginController;
use Illuminate\Support\Facades\Route;

Route::get('indexadmin',[adminfController::class,'indexadmin'])->name('indexadmin');
Route::get('viewstudents',[adminfController::class,'viewstudents'])->name('viewstudents');
Route::get('student_registration',[adminfController::class,'student_registration'])->name('student_registration');
Route::get('teachers_registration',[adminfController::class,'teachers_registration'])->name('teachers_registration');
Route::get('school_courses',[adminfController::class,'school_courses'])->name('school_courses');
Route::get('classrooms',[adminfController::class,'classrooms'])->name('classrooms');
Route::get('view_classroom',[adminfController::class,'view_classroom'])->name('view_classroom');

Route::get('view_teachers',[tearchersController::class,'view_teachers'])->name('view_teachers');
Route::get('teacherscourses/{id}',[tearchersController::class,'teacherscourses'])->name('teacherscourses');
Route::post('addteachercourstodb/{id}',[tearchersController::class,'addteachercourstodb'])->name('addteachercourstodb');
Route::get('view_teachers_info/{id}',[tearchersController::class,'view_teachers_info'])->name('view_teachers_info');

Route::post('addschoolcourstodb',[schoolController::class,'addschoolcourstodb'])->name('addschoolcourstodb');

Route::post('addteachertodb',[tearchersController::class,'addteachertodb'])->name('addteachertodb');
Route::post('addclassroomtodb',[schoolController::class,'addclassroomtodb'])->name('addclassroomtodb');

Route::post('addstudenttodb',[studentController::class,'addstudenttodb'])->name('addstudenttodb');
Route::get('viewstudents',[studentController::class,'viewstudents'])->name('viewstudents');

Route::get('student_courses/{id}',[studentController::class,'student_courses'])->name('student_courses');
Route::post('addstudentcourstodb/{id}',[studentController::class,'addstudentcourstodb'])->name('addstudentcourstodb');
Route::get('addsemester',[schoolController::class,'addsemester'])->name('addsemester');

Route::get('view_semester',[schoolController::class,'view_semester'])->name('view_semester');
Route::get('view_school_courses',[adminfController::class,'view_school_courses'])->name('view_school_courses');
Route::post('addsemestertodb',[schoolController::class,'addsemestertodb'])->name('addsemestertodb');
Route::get('addlevel',[schoolController::class,'addlevel'])->name('addlevel');
Route::post('addleveltodb',[schoolController::class,'addleveltodb'])->name('addleveltodb');
Route::get('view_level',[schoolController::class,'view_level'])->name('view_level');
Route::get('tutorials',[schoolController::class,'tutorials'])->name('tutorials');
Route::get('view_tutorial',[schoolController::class,'view_tutorial'])->name('view_tutorial');
Route::post('tutorialtodb',[schoolController::class,'tutorialtodb'])->name('tutorialtodb');

//frontend
Route::get('',[homeController::class,'home'])->name('home');
//hostel
Route::get('student_hostel_register',[hostelController::class,'student_hostel_register'])->name('student_hostel_register');
Route::post('hosteltodb',[hostelController::class,'hosteltodb'])->name('hosteltodb');
Route::get('view_admin_hostel',[hostelController::class,'view_admin_hostel'])->name('view_admin_hostel');

//login
Route::get('login',[loginController::class,'login'])->name('login');
Route::post('logintodb',[loginController::class,'logintodb'])->name('logintodb');
Route::get('logout',[loginController::class,'logout'])->name('logout');

//studenfrontend
Route::get('myprofile',[studentfrentendController::class,'myprofile'])->name('myprofile');
Route::get('mycourses',[studentfrentendController::class,'mycourses'])->name('mycourses');
Route::get('studentgo_cours/{id}/level/{lid}/',[studentfrentendController::class,'studentgo_cours'])->name('studentgo_cours');
Route::get('student_watch/{id}',[studentfrentendController::class,'student_watch'])->name('student_watch');
Route::get('readpdf/{id}',[studentfrentendController::class,'readpdf'])->name('readpdf');
Route::get('student_hostel',[studentfrentendController::class,'student_hostel'])->name('student_hostel');
Route::get('view_hostel/{id}',[studentfrentendController::class,'view_hostel'])->name('view_hostel');

Route::get('view_school_event',[enventController::class,'view_school_event'])->name('view_school_event');
Route::get('insert_event',[enventController::class,'insert_event'])->name('insert_event');
Route::post('inserteventtodb',[enventController::class,'inserteventtodb'])->name('inserteventtodb');
