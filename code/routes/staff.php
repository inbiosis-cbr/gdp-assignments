<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('staff')->user();

    //dd($users);
    $userType = 'staff';
    return view('staff.home', compact('userType'));
})->name('home');
