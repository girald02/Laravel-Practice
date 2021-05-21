<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () { 
//     return view('welcome');
// });

Route::get('/sample', 'Pages_Controller@index');

Route::resource('blog' , 'Articles_Controller');

// Route::get('/test{message}' , 'RedirectSampleContoller@showMessage')->name('RedirectIndex');

// // Route::get('/redirectme', function () { 
// //     return redirect()->route("RedirectIndex", ["message" => "This is my message" ]);
// // });


// Route::get('/redirectme', function () { 
//     return redirect()->action("RedirectSampleContoller@showSomething" , ["message" => "This is my something new message" ]);
// });

// Route::get('/displaySomething/{message}' , 'RedirectSampleContoller@showSomething');


