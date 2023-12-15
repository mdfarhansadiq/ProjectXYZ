<?php

namespace App\Http\Controllers\sidebar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\adminCategoryModel;

class SideBarController extends Controller
{
    public function sidebarPage()
    {
        $data = 'Hello World';

        return view('partial.sidebar', compact('data'));
    }
}
