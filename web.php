<?php

Route::get('/', function () {
    return redirect()->route('appointments.index');
});

Route::resource('appointments', 'AppointmentController');
