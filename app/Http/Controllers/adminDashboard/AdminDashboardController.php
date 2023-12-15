<?php

namespace App\Http\Controllers\adminDashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminDashboardController extends Controller
{
    public function adminDashboardPageView()
    {
        $userId = Session::get('userid');

        if($userId)
        {
            return view('admin.dashboard');
        }

        return redirect('/');
    }
}
