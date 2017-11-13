<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('customer')->user();

    //dd($users);
    $userType = 'customer';

    return view('adminlte.customer.home')
        ->withUserType($userType);
})->name('home');
