<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains th;e "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index'])->name('login');
//Route::get('/users', 'App\Http\Controllers\UserController@index');

Route::get('/users/{id}', [UserController::class, 'show']);


//===================================================================
// Route::get('/', function () {
//     return view('welcome');
// });


// * There are multiple uses for route
// Route::get('users/{id}', function ($id) {
// });
// Route::post('users/{id}', function ($id) {
// });
// Route::put('users/{id}', function ($id) {
// });

// Route::match(['get', 'post'], '/', function () {
//     return 'Chipi Chipi Chapa Chapa';
// });

// Route::any('/', function() {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return 'redirected';
// });
// Route::redirect('/welcome', '/');

// Route::permanentRedirect('/welcome', '/');

// Route::get('/', function () {
//     return 'Welcome';
// });

// Returns what the user requests
// Route::get('/users', function (Request $request) {
//     dd($request); //dd == die and dump
//     return null;
// });

// Route::get('/get-text', function () {
//     return response('I am starting to see things.', 200)
//                 ->header('Content-Type', 'text/plain');
// });

//adding parameters to urls, 200 is a url header type
// Route::get('/user/{id}/{group}', function ($id, $group) {
//     return response($id.'-'.$group, 200);
// });

//return json
// Route::get('/request-json', function () {
//     return response()->json(['name' => 'Nerve', 'age' => '-1']);
// });

//Returns a download file
// Route::get('/request-download', function () {

//     $path = public_path().'/sample.txt';
//     $name = 'sample.txt';
//     $headers = array(
//         'Content-type : application/text-plain',
//     );
//     return response()->download($path, $name, $headers);
// });
