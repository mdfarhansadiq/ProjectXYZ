<?php

namespace App\Http\Controllers\sport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\adminCategoryModel;
use App\Models\adminBlogModel;

class SportController extends Controller
{
    public function sportPageView()
    {
        $blogInfos = adminBlogModel::all();

        return view('pages.sport', compact('blogInfos'));
    }
}
