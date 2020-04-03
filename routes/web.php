<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


/*
| ------------------------------------------------------
| Redirects to current user role-privilege
| This redirects back to current user route instead of "/"
| "course_rep" is just some dummy route...
| if the user is lecturer the middleware will redirect
| So this specified route doesn't really matter

*/
Route::get('/', function (){
    return redirect()->route('course_rep');
});

Route::get('/root', 'Root\RootController@index')->name('root');

Route::get('/lecturer', 'Lecturer\LecturerController@index')->name('lecturer');


/*
| -----------------------------------------------------------------------------
| This handles the routes for the Course Representative
| It also specifies Resource for some route like messages and personal_message
|
| -----------------------------------------------------------------------------
*/


Route::group(['prefix' => 'course_rep'], function () {

    Route::get('/', 'Course_Rep\Course_Rep_Controller@index')->name('course_rep');
    Route::get('student', 'Course_Rep\Student\StudentController@index');
    Route::get('add', 'Course_Rep\Student\StudentController@create');
    Route::post('add', 'Course_Rep\Student\StudentController@store')->name('add_new_student');
    Route::get('profile', 'Course_Rep\Profile\ProfileController@index');
    Route::post('profile', 'Course_Rep\Profile\ProfileController@update',1)->name('update_profile');
    Route::resource('messages', 'Course_Rep\Message\MessageController');
    Route::resource('personal_message','Course_Rep\Message\PersonalMessageController');
    Route::get('personal_message', 'Course_Rep\Message\PersonalMessageController@index')->name('personal_message');
    Route::post('personal_message/create', 'Course_Rep\Message\PersonalMessageController@store');
    Route::post('messages/create', 'Course_Rep\Message\MessageController@store')->name('send_message');

});


/*
| --------------------------------------
| This specifies the route for Lecturers
|             
|                                       
| --------------------------------------
*/


Auth::routes();


























/*
Route::get('/message_root','MessageController@create');
Route::post('/message_root','MessageController@store')->name('personal_message_to_admin');

Route::get('/admin','AdminController@add_admin');

Route::post('/admin','RegisterAdminController@create')->name('admin_register');

Route::get('/messages', 'MessageController@index');

Route::get('/profile','ProfileController@index');

Route::post('/profile','ProfileController@update', Auth::id())->name('update_profile');

Route::get('/send','AdminController@send_message');

Route::post('/send', 'AdminController@send')->name('send_message');

Route::get('/add', 'AdminController@create');

Route::post('/add', 'AdminController@store')->name('add_student_phone_number');
*/

