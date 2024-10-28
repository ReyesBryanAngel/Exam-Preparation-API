<?php
use App\Http\Controllers\ExamController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function() {
    Route::prefix('/exams')
        ->controller(ExamController::class)
        ->group(function() {
            Route::post('/', 'createExam')->name('exam.create');
            Route::put('/{id}', 'updateExam')->name('exam.updae');
            Route::get('/{id}', 'getExam')->name('exam.get');
            Route::get('/', 'getExams')->name('exams.get');
        });
});