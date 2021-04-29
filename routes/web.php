<?php



Route::group(['middleware' => 'checkUserLogedIn'], function () {
    Route::get("/login", \App\Http\Livewire\Login::class)->name('login');
    Route::get("/register", \App\Http\Livewire\Register::class)->name('register');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get("/", \App\Http\Livewire\Home::class)->name('home');
});