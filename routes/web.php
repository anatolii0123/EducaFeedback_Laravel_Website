<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/' , function () { return view('pages/classes/overview');})->name('home');
// route for user  login
Route::get('/login' , function () { return view('auth/login');})->name('login');
Route::get('/verify' , function () { return view('auth/verify');})->name('verify');


Route::get('/classes/overview', function () { return view('pages/classes/overview');})->name('classes.overview');
Route::get('/classes/manage', function () { return view('pages/classes/manage');})->name('classes.manage');
Route::get('/classes/manage/new_class', function () { return view('pages/classes/new_class');})->name('new_class.manage');
Route::get('/classes/manage/edit', function () { return view('pages/classes/edit');})->name('new_class.manage');

// Route::get('/classes/overview', function () { return view('pages/classes/overview');})->name('classes.overview');
// Route::get('/classes/manage', function () { return view('pages/classes/manage');})->name('classes.manage');
// Route::get('/classes/manage/new_class', function () { return view('pages/classes/new_class');})->name('new_class.manage');
// Route::get('/classes/manage/edit', function () { return view('pages/classes/edit');})->name('new_class.manage');

Route::get('/classes/students', function () { return view('pages/classes/students');})->name('classes.students');
// assessments routes
Route::get('/assessments/section', function () { return view('pages/assessments/section');})->name('assessments.section');
Route::get('/assessments/tests', function () { return view('pages/assessments/tests');})->name('assessments.tests');
Route::get('/assessments/tests/new_test', function () { return view('pages/assessments/new_test');})->name('assessments.new_test');
Route::get('/assessments/feedback', function () { return view('pages/assessments/feedback');})->name('assessments.feedback');
Route::get('/assessments/exercises', function () { return view('pages/assessments/exercises');})->name('assessments.exercises');

Route::get('/support/email', function () { return view('pages/support/email');})->name('support.email');
Route::get('/support/history', function () { return view('pages/support/history');})->name('support.history');
Route::get('/support/contact', function () { return view('pages/support/contact');})->name('support.contact');
Route::get('/support/notification', function () { return view('pages/support/notification');})->name('support.notification');


// Route::group(['middleware' => 'auth'], function () {
// });