<?php

use App\Http\Controllers\Frontend\LoginRegisterController;
use App\Http\Controllers\Frontend\SportsEventsController;
use App\Http\Controllers\Frontend\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/m', function () {
    return view('welcome');
});

Route::get('/',[SportsEventsController::class,'index']);
Route::get('/about',[SportsEventsController::class,'about']);
Route::get('/blog',[SportsEventsController::class,'blog']);
Route::get('/contact',[SportsEventsController::class,'contact']);
Route::get('/news',[SportsEventsController::class,'news']);
Route::get('/single_blog',[SportsEventsController::class,'single_blog']);
Route::get('/team',[SportsEventsController::class,'team']);

Route::get('login',function(){
    return view('frontend.login');
});
Route::get('register',function(){
    return view('frontend.register');
});
Route::post('login',[LoginRegisterController::class,'login']);
Route::post('register',[LoginRegisterController::class,'userregister']);


Route::post('ticket',[TicketController::class,'ticket']);
Route::get('/ticket', function(){
    if(!session()->has('username'))
    {
        return redirect('login');
    }
    return view('frontend.ticket');
});

Route::get('logout', function () {
    session()->forget('username');
    return redirect('login')->with('success', 'Logged out successfully!');
});

Route::view('3dview','frontend.3dview');
Route::view('success','frontend.success');