<?php

namespace App\Http\Controllers\adminCategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\adminCategoryModel;

class AdminCategoryController extends Controller
{
    public function adminCategoryPageView()
    {
        $userId = Session::get('userid');

        if($userId == 1)
        {
            $categs = adminCategoryModel::all();
            return view('admin.categoryForm', compact('categs'));
        }

        return redirect('/');
    }

    public function adminCategoryCreate(Request $req)
    {
        $categ = new adminCategoryModel();

        $categ->category_name = $req->category_name;

        $categ->save();

        return redirect('/admin/category-form');
    }
}
