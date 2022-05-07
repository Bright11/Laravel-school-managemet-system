<?php

use App\Http\Controllers\admin\adminfController;
use App\Http\Controllers\admin\school\schoolController;
use App\Http\Controllers\admin\studentController;
use App\Http\Controllers\admin\teachers\tearchersController;
use App\Http\Controllers\admission\admissionController;
use App\Http\Controllers\annoucement\annuoucementController;
use App\Http\Controllers\event\enventController;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\frontend\student\studentfrentendController;
use App\Http\Controllers\hostel\hostelController;
use App\Http\Controllers\imports\excelimportController;
use App\Http\Controllers\login\loginController;
use App\Http\Controllers\online\onlineController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\sponsors\sponsorController;
use App\Http\Controllers\staf\stafController;
use Illuminate\Support\Facades\Route;

Route::get('indexadmin',[adminfController::class,'indexadmin'])->name('indexadmin');
Route::get('viewstudents',[adminfController::class,'viewstudents'])->name('viewstudents');
Route::get('student_registration',[adminfController::class,'student_registration'])->name('student_registration');
Route::get('teachers_edit/{id}',[adminfController::class,'teachers_edit'])->name('teachers_edit');
Route::get('school_courses',[adminfController::class,'school_courses'])->name('school_courses');
Route::get('classrooms',[adminfController::class,'classrooms'])->name('classrooms');
Route::get('view_classroom',[adminfController::class,'view_classroom'])->name('view_classroom');
Route::get('staf_registration',[adminfController::class,'staf_registration'])->name('staf_registration');

Route::post('addstaftodb',[stafController::class,'addstaftodb'])->name('addstaftodb');
Route::get('view_teachers',[tearchersController::class,'view_teachers'])->name('view_teachers');
Route::get('teacherscourses/{id}',[tearchersController::class,'teacherscourses'])->name('teacherscourses');
Route::post('addteachercourstodb/{id}',[tearchersController::class,'addteachercourstodb'])->name('addteachercourstodb');
Route::get('view_teachers_info/{id}',[tearchersController::class,'view_teachers_info'])->name('view_teachers_info');
Route::get('view_mytutorial',[tearchersController::class,'view_mytutorial'])->name('view_mytutorial');
Route::post('addschoolcourstodb',[schoolController::class,'addschoolcourstodb'])->name('addschoolcourstodb');
Route::get('tearchinfo',[tearchersController::class,'tearchinfo'])->name('tearchinfo');

Route::put('editeteachertodb/{id}',[tearchersController::class,'editeteachertodb'])->name('editeteachertodb');

Route::post('addclassroomtodb',[schoolController::class,'addclassroomtodb'])->name('addclassroomtodb');
Route::get('view_new_teachers',[tearchersController::class,'view_new_teachers'])->name('view_new_teachers');
Route::post('teacherscompleteregister',[tearchersController::class,'teacherscompleteregister'])->name('teacherscompleteregister');

Route::post('addstudenttodb',[studentController::class,'addstudenttodb'])->name('addstudenttodb');
Route::get('viewstudents',[studentController::class,'viewstudents'])->name('viewstudents');
Route::get('view_new_student',[studentController::class,'view_new_student'])->name('view_new_student');
Route::post('studentcompleteregister',[studentController::class,'studentcompleteregister'])->name('studentcompleteregister');
Route::put('suspend_student/{id}',[studentController::class,'suspend_student'])->name('suspend_student');

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
Route::get('lecturer',[homeController::class,'lecturer'])->name('lecturer');
//hostel
Route::get('student_hostel_register',[hostelController::class,'student_hostel_register'])->name('student_hostel_register');
Route::post('hosteltodb',[hostelController::class,'hosteltodb'])->name('hosteltodb');
Route::get('view_admin_hostel',[hostelController::class,'view_admin_hostel'])->name('view_admin_hostel');

//login
Route::get('login',[loginController::class,'login'])->name('login');
Route::post('logintodb',[loginController::class,'logintodb'])->name('logintodb');
Route::get('registration',[loginController::class,'registration'])->name('registration');
Route::post('registerdb',[loginController::class,'registerdb'])->name('registerdb');
Route::get('logout',[loginController::class,'logout'])->name('logout');
Route::get('view_users',[loginController::class,'view_users'])->name('view_users');
//studenfrontend
Route::get('myprofile',[studentfrentendController::class,'myprofile'])->name('myprofile');
Route::get('mycourses',[studentfrentendController::class,'mycourses'])->name('mycourses');
Route::get('studentgo_cours/{id}/level/{level_id}/semester/{semesters_id}',[studentfrentendController::class,'studentgo_cours'])->name('studentgo_cours');
Route::get('student_watch/{id}',[studentfrentendController::class,'student_watch'])->name('student_watch');
Route::get('readpdf/{id}',[studentfrentendController::class,'readpdf'])->name('readpdf');
Route::get('student_hostel',[studentfrentendController::class,'student_hostel'])->name('student_hostel');
Route::get('view_hostel/{id}',[studentfrentendController::class,'view_hostel'])->name('view_hostel');

Route::get('view_school_event',[enventController::class,'view_school_event'])->name('view_school_event');
Route::get('insert_event',[enventController::class,'insert_event'])->name('insert_event');
Route::post('inserteventtodb',[enventController::class,'inserteventtodb'])->name('inserteventtodb');
Route::get('eventdetils/{id}',[enventController::class,'eventdetils'])->name('eventdetils');

//online
Route::get('buy_courses',[onlineController::class,'buy_courses'])->name('buy_courses');
Route::get('addonline_course',[onlineController::class,'addonline_course'])->name('addonline_course');
Route::post('onlinetutorialtodb',[onlineController::class,'onlinetutorialtodb'])->name('onlinetutorialtodb');
Route::get('my_video_tutorial',[onlineController::class,'my_video_tutorial'])->name('my_video_tutorial');
Route::get('my_paid_video_tutorial',[onlineController::class,'my_paid_video_tutorial'])->name('my_paid_video_tutorial');

Route::get('view_onlinecours/{id}/ownner_id/{ownner_id}',[onlineController::class,'view_onlinecours'])->name('view_onlinecours');

Route::get('startlearningonline/{id}/ownner_id/{ownner_id}',[onlineController::class,'startlearningonline'])->name('startlearningonline');



Route::get('deite/{id}',[onlineController::class,'deite'])->name('deite');

Route::get('admisionform',[admissionController::class,'admisionform'])->name('admisionform');
Route::post('addadmisiontodb',[admissionController::class,'addadmisiontodb'])->name('addadmisiontodb');
Route::get('student_admission',[admissionController::class,'student_admission'])->name('student_admission');

Route::post('registerwithexcel',[excelimportController::class,'registerwithexcel'])->name('registerwithexcel');
Route::post('studentwithexcel',[excelimportController::class,'studentwithexcel'])->name('studentwithexcel');
Route::post('teacherexceltodb',[excelimportController::class,'teacherexceltodb'])->name('teacherexceltodb');

//payment
//Route::get('course_paynow',[paymentController::class,'course_paynow'])->name('course_paynow');

Route::get('successpaypal/{course_id}/user/{user}/price/{price}',[paymentController::class,'successpaypal'])->name('successpaypal');
Route::get('hostel_payment/{id}',[paymentController::class,'hostel_payment'])->name('hostel_payment');
Route::get('success_hostelpaypal/{hoste_id}/user/{user}/hostelnumber/{hostelnumber}',[paymentController::class,'success_hostelpaypal'])->name('success_hostelpaypal');

Route::get('onlinetutorialpayment/{id}',[paymentController::class,'onlinetutorialpayment'])->name('onlinetutorialpayment');
Route::get('onlinetutorialpaymentcompelete/{buyingcode}/id/{id}/price/{price}',[paymentController::class,'onlinetutorialpaymentcompelete'])->name('onlinetutorialpaymentcompelete');

//sponsor
Route::get('view_sponsors',[sponsorController::class,'view_sponsors'])->name('view_sponsors');
Route::get('sponsors',[sponsorController::class,'sponsors'])->name('sponsors');
Route::post('addsponsortodb',[sponsorController::class,'addsponsortodb'])->name('addsponsortodb');


Route::get('teacher_profile',[tearchersController::class,'teacher_profile'])->name('teacher_profile');
//annoucement
Route::get('annoucement',[annuoucementController::class,'annoucement'])->name('annoucement');
Route::get('view_annoucement',[annuoucementController::class,'view_annoucement'])->name('view_annoucement');
Route::post('addannoucementtodb',[annuoucementController::class,'addannoucementtodb'])->name('addannoucementtodb');
Route::get('announcementdetils/{id}',[annuoucementController::class,'announcementdetils'])->name('announcementdetils');
