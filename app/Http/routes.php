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
    if(isset($_POST['chuck'])){
        $data = json_decode(file_get_contents("http://api.icndb.com/jokes/random"));
        $command = 'say -v ' . escapeshellarg($_POST['voice']) . ' "' . $data->value->joke . '"';
    }else {
        //Filter bad words
        $say = str_replace("fuck", "f word", $_POST['say']);
        $command = 'say -v ' . escapeshellarg($_POST['voice']) . ' "' . $say . '"';
    }
    shell_exec($command);
   echo $command;
    return view('welcome');
});


