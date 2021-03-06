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

Route::get('/', function () {
    return redirect('calendar');
});

Route::name('syllabus')->get('/syllabus', function () {
    return view('syllabus');
});

Route::name('calendar')->get('/calendar', function () {
    return view('calendar');
});

Route::name('resources')->get('/resources', function () {
    return view('resources');
});

Route::name('project')->get('/project', function () {
    return view('project');
});
