<?php

namespace App\Http\Controllers\health;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function healthPageView()
    {
        return view('pages.health');
    }
}
