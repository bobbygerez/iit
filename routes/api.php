<?php

Route::get('start-up', 'API\StartUpController@index');
Route::get('cities/{provinceId}', 'API\StartUpController@getCities');
Route::get('get-city-zipcode/{cityId}', 'API\StartUpController@getCityZipCode');
Route::get('get-question-id/{answerId}', 'API\StartUpController@getQuestionId');
Route::post('enrollment', 'API\StartUpController@enrollment');
Route::get('courses', 'API\Course\CourseController@index');
Route::get('roles', 'API\StartUpController@getRoles');
Route::get('enrollees', 'API\Enrollee\EnrolleeController@getEnrollees');

Route::get('confirm-enrolled', 'API\ConfirmEnrolled\ConfirmedEnrolledController@index');
Route::get('confirm-enrolled/{id}', 'API\ConfirmEnrolled\ConfirmedEnrolledController@edit');
Route::get('confirm-enrolled/print/{confirmEnrolleeId}', 'API\ConfirmEnrolled\ConfirmedEnrolledController@print');
Route::put('confirm-enrolled/{id}', 'API\ConfirmEnrolled\ConfirmedEnrolledController@update');
Route::post('auth/register', 'API\User\UserController@register');
Route::post('auth/login', 'API\User\UserController@login');
Route::get('auth/logout', 'API\User\UserController@logout');
Route::post('profile-update', 'API\User\UserController@profileUpdate');
Route::group(['middleware' => ['jwt.auth', 'role:admin']], function () {
    Route::get('user', 'API\User\UserController@getAuthUser');
});
