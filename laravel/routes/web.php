<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('account/change-password', 'UsersController@changePassword')->name('change-password');
    Route::put('account/update-password', 'UsersController@updatePassword')->name('update-password');
    Route::get('account/certificates', 'UsersController@certificates')->name('certificates');
    Route::get('account/certificates/{test}', 'UsersController@certificateView')->name('certificate-view');
    Route::get('account/certificates/{test}/download', 'UsersController@certificateDownload')->name('certificate-download');
    Route::get('account/certificates/{test}/download', 'UsersController@certificateDownload')->name('certificate-download');
    Route::get('modules/{hash}', 'ModulesController@show')->name('module');
    Route::get('modules/play/{hash}', 'ModulesController@play')->name('play');
    
    Route::get('tests', 'TestsController@index')->name('tests');
    Route::get('tests/{test}/take', 'TestsController@take')->name('test-take');
    Route::post('tests/{test}/submit', 'TestsController@submit')->name('test-submit');
    Route::get('admin/tests', 'TestsAdminController@index')->name('admin-tests');
    Route::get('admin/tests/{test}/edit', 'TestsAdminController@edit')->name('test-edit');
    Route::get('admin/tests/{test}/questions/create', 'TestsAdminController@createQuestion')->name('question-create');
    Route::get('admin/tests/{test}/questions/{question}/edit', 'TestsAdminController@editQuestion')->name('question-edit');
    Route::put('admin/tests/{test}/questions/{question}', 'TestsAdminController@updateQuestion')->name('question-update');
    Route::delete('admin/tests/{test}/questions/{question}', 'TestsAdminController@deleteQuestion')->name('question-delete');
    Route::post('admin/tests/{test}/questions', 'TestsAdminController@storeQuestion')->name('question-store');
    
    Route::get('admin/orders', 'OrdersController@index')->name('admin-orders');
    Route::get('admin/orders/create', 'OrdersController@create')->name('order-create');
    Route::get('admin/orders/{order}/edit', 'OrdersController@edit')->name('order-edit');
    Route::put('admin/orders/{order}', 'OrdersController@update')->name('order-update');
    Route::post('admin/orders', 'OrdersController@store')->name('order-store');

    Route::get('admin/courses', 'CoursesAdminController@index')->name('admin-courses');
    Route::get('admin/courses/create', 'CoursesAdminController@create')->name('course-create');
    Route::get('admin/courses/{course}/edit', 'CoursesAdminController@edit')->name('course-edit');
    Route::put('admin/courses/{course}', 'CoursesAdminController@update')->name('course-update');
    Route::post('admin/courses', 'CoursesAdminController@store')->name('course-store');
});

