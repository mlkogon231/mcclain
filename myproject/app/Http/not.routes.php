<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
  //  return view('welcome');
  echo 'Hello World, you are in the http root directory';

});

Route::get('hello/{name}', function ($name) {
  //  return view('welcome');
  echo 'Hello ' . $name . 'from my barebones application, you must be ';

});
//create
Route::post('post', function() {
 echo 'POST';
});
//read 
Route::get('action', function() {
//echo '<form method="POST" action="post">';
//echo '<input type="SUBMIT" value = "submit">';
//echo 'POST (create), PUT (update), and DELETE (delete) must all be disabled, because this is the read url';
// to access POST, PUT or DELETE routes, comment out above line, and uncomment one of these blocks
/* post block */
echo '<form method="POST" action="post">';
echo '<input type="SUBMIT" value = "POST">';
echo '</form>';
/* end of post block
// uncomment one of the below lines for route
// echo '<input type = "hidden" value = "PUT" name = "_method">';
// echo '<input type = "hidden" value = "DELETE" name = "_method">';



//echo '</form>';
});

//update
Route::put('test', function() {
  echo 'PUT';
});
//delete
Route::delete('test', function() {
  echo 'DELETE';
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
