<?php

use App\Events\UserSingedUp;
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
    /*$data = [
        'event' => 'UserSingedUp',
        'data' => [
            'username' => 'JohnDoe'
        ]
    ];*/

    event(new UserSingedUp('Madhu Sudhan Subedi'));

    return view('welcome');
});
