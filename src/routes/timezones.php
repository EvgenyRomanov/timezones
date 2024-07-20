<?php

use EvgenyRomanov\Timezones\Http\Controllers\TimezonesController;
use Illuminate\Support\Facades\Route;

Route::get('timezones/{timezone?}', TimezonesController::class);
