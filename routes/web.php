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

Route::get('/', function () {
    return view('conversation');
});
Route::get('/conversation/dateres', 'ConversationResponse@date');
Route::get('/conversation/govres', 'ConversationResponse@governors');

Route::get('/conversation/userattrib', 'ConversationHistory@userattrib');
