<?php

Route::get('/', function () {
  //  return view('welcome');
  echo 'Hello World, this is a barebones application, you are in the http root directory';

});

// database stuff here

Route::get('customer', function(){
  $customer = App\Customer::find(1);
  echo  '<pre>';
  print_r($customer);

});

Route::get('customer/{id}', function($id) {
  $customer = App\Customer::find($id);
  echo '<center>';
  echo '<table border = 1><tr><td>FirstName</td><td>Lastname</td><td>Email</td></tr>';
  echo '<tr><td>' . $customer->FirstName . '</td><td>' . $customer->LastName . '</td><td>' . $customer->Email . '</td></tr></table>';
});

Route::get('customer_name', function() {
  $customer = App\Customer::where('LastName', '=', 'Kogon')->first();
 echo '<center>';
  echo '<table border = 1><tr><td>FirstName</td><td>Lastname</td><td>Email</td></tr>'; 
  echo '<tr><td>' . $customer->FirstName . '</td><td>' . $customer->LastName . '</td><td>' . $customer->Email . '</td></tr></table>';
});

Route::get('hello/{name}', function ($name) {
  //  return view('welcome');
  echo 'Hello ' . $name . ', Welcome to my barebones application';

});
//create
Route::post('action', function() {
 echo 'You have the POST Route enabled';
});
//read 
Route::get('action', function() {
echo '<form method="POST" action="action">';
echo '<input type="SUBMIT" value = "submit">';
// to access the put and delete routes
// uncomment one of the below lines for route
// echo '<input type = "hidden" value = "PUT" name = "_method">';
// echo '<input type = "hidden" value = "DELETE" name = "_method">';

echo '</form>';
});

//update
Route::put('action', function() {
  echo 'you have the PUT functionality enabled';
});
//delete
Route::delete('action', function() {
  echo 'You have the DELETE enabled';
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' => ['web']], function () {
    //
});
