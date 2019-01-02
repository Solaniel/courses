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



Route::get('/home', 'HomeController@index')->name('home');

Route::post('courses.search', 'SearchController@searchCourses');
Route::post('lecturers.search', 'SearchController@searchLecturers');
Route::post('organisations.search', 'SearchController@searchOrganisations');

Route::resource('images', 'ImagesController');
