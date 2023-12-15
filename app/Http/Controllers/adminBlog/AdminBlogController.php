<?php

namespace App\Http\Controllers\adminBlog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\adminCategoryModel;
use App\Models\adminBlogModel;

class AdminBlogController extends Controller
{
    public function adminBlogPageView()
    {
        $userId = Session::get('userid');

        if ($userId == 1) {

            $categs = adminCategoryModel::all();

            $blogs = adminBlogModel::all();

            return view('admin.blogForm', compact('categs', 'blogs'));
        }

        return redirect('/');
    }

    public function adminBlogCreate(Request $req)
    {
        $blog = new adminBlogModel();

        $blog->blog_categ_id = $req->blog_categ_id;
        $blog->blog_title = $req->blog_title;

        $path = '';
        if ($req->hasFile('blog_image')) {
            $file = $req->file('blog_image');
            $filename = $file->getClientOriginalName();
            $folder = $blog->blog_categ_id;
            $path = $req->file('blog_image')->storeAs($folder, $filename, 'public');
        }
        $blog->blog_image = '/storage/'.$path;

        $blog->blog_description = $req->blog_description;

        $blog->save();

        return redirect('/admin/blog-form');
    }

    public function adminBlogEditShow($id)
    {
        $userId = Session::get('userid');

        if($userId == 1)
        {
            $categs = adminCategoryModel::all();
            $blogData = adminBlogModel::findOrFail($id);

            return view('admin.blogFormEdit', compact('categs', 'blogData'));
        }

    }

    public function adminBlogEditUpdate($id, Request $req)
    {
        $blog = adminBlogModel::findOrFail($id);

        $blog->blog_categ_id = $req->blog_categ_id;
        $blog->blog_title = $req->blog_title;

        $path = '';
        if ($req->hasFile('blog_image')) {
            $file = $req->file('blog_image');
            $filename = $file->getClientOriginalName();
            $folder = $blog->blog_categ_id;
            $path = $req->file('blog_image')->storeAs($folder, $filename, 'public');
        }
        $blog->blog_image = '/storage/'.$path;

        $blog->blog_description = $req->blog_description;

        $blog->save();

        return redirect('/admin/blog-form');
    }
}
