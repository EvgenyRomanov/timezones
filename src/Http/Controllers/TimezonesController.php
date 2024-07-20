<?php

namespace EvgenyRomanov\Timezones\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Contracts\View\View;

class TimezonesController
{
    public function __invoke($timezone = null): View
    {
        $currentTime = $timezone
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();

        return view('timezones::time', compact('currentTime'));
    }
}
