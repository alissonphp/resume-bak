<?php

Route::get('jobs','Alisson\ResumeBank\Controllers\ResumeBankController@index');

Route::group(['prefix' => 'candidate', 'namespace' => 'Alisson\ResumeBank\Controllers\Candidates'], function (){
    Route::get('/','InitController@index')->name('candidate.index');
    Route::get('register','InitController@verify')->name('candidate.register');
    Route::post('register','InitController@verify')->name('candidate.verify');

    Route::post('store', 'InitController@store')->name('candidate.store');

    Route::get('resume', 'InitController@resume')->name('candidate.resume.show');
    Route::post('resume', 'InitController@resumeStore')->name('candidate.resume.store');

});