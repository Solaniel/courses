<?php
use App\Course;
use Illuminate\Support\Facades\Input;
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
    return view('welcome');
});

Auth::routes();

//Route::group(['prefix' => 'admin', 'middleware' =>
    //['web', 'auth'], 'namespace' => 'Admin'], function () {
    Route::resource('courses','CourseController');
    Route::resource('lecturers','LecturerController');
    Route::resource('organisations','OrganisationController');
    Route::resource('locations','LocationController');
//});

Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $course = Course::where('courseName','LIKE','%'.$q.'%')->orWhere('conDate','LIKE','%'.$q.'%')->get();
    if(count($course) > 0)
        return view('courses.search')->withDetails($course)->withQuery ( $q );
    else return view('courses.search')->withMessage('No Details found. Try to search again !');
});

Route::get('/home', 'HomeController@index')->name('home');

