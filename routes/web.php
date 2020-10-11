<?php

Route::view('/','welcome')->name('welcome');
Auth::routes();

Route::get('test/inactives','TestController@inactive')->name('test.inactive');
Route::get('test/{test}/active','TestController@active')->name('test.active');
Route::get('test/{test}/proof','TestController@proof')->name('test.proof');
Route::get('question/answer','QuestionController@answer')->name('question.answer');
Route::get('calender/pdf','CalenderController@createPDF')->name('calender.pdf');
Route::get('student', 'StudentController@showStudents')->name('student.index');
Route::get('/student/pdf','StudentController@createPDF');
Route::get('profile/{auth}/edit','HomeController@profile')->name('auth.profile');
Route::post('profile/{auth}','HomeController@update')->name('auth.profileStore');

Route::resource('test','TestController');
Route::resource('photos','PhotoController');
Route::resource('dashboard','DashboardController');
Route::resource('calender','CalenderController');
Route::resource('proof','ProofController');
Route::resource('question','QuestionController');



?>
