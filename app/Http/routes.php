<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function () {
    $command =  'say -v "Alex" "'.escapeshellarg($_POST['say']).'"';
    shell_exec($command);
 //  echo $command;
    return view('welcome');
});
