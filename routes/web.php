<?php

use App\Http\Controllers\ExamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['prefix' => 'v1'], function() {
//     Route::prefix('/exams')
//         ->controller(ExamController::class)
//         ->group(function() {
//             Route::post('/', 'createExam')->name('exam.create');
//         });
// });
