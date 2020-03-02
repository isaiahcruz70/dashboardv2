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

Auth::routes();

// Route::get('/posts/{post}', function($post) {
//     $posts = [
//         'my-first-post' => 'Hello, this is my first post!',
//         'my-second-post' => 'Now I am getting a hang of this blogging thing.'
//     ];

//     if (! array_key_exist($post, $posts)) {
//         abort(404, 'Sorry, that post was not found.');
//     }

//     return view('post', [
//         'post' => $posts[$post]
//     ]);
// });

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/dashboard/queue-submitted', 'DashboardController@storeQueue');

Route::get('/dashboard/request-queue', 'DashboardController@create');

Route::get('/dashboard/finish-queues', 'FinishQueuesController@index');

Route::get('/dashboard', 'DashboardController@index');

// Route::get('/dashboard/vuln-add', 'VulnController@store');

// Route::get('/home', 'HomeController@index');

// Route::post('/dashboard/submit-request', 'EmergencyRequestController@store');

// Route::get('/request-queue', 'SubmitController@request');

Route::get('/dashboard/submit-queue', 'SubmitController@submit');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
