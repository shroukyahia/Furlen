<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Carbon;

class BlogCategoryController extends Controller
{
    public function AllBlogCategory()
    {

        $blogcategory = BlogCategory::latest()->get();
        return view('admin.blog_category.blog_category_all', compact('blogcategory'));
    }

    public function AddBlogCategory()
    {
        return view('admin.blog_category.blog_category_add');
    }

    public function StoreBlogCategory(Request $request)
    {
        $image = $request->file('image_category');
        $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(460, 550)->save('upload/blog_category/' . $image_name);
        $save_url = 'upload/blog_category/' . $image_name;
        BlogCategory::insert([
            'blog_category' => $request->blog_category,
            'image_category' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Blog Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);
        // return redirect()->back();
    }


    public function EditBlogCategory($id)
    {
        $blogcategory = BlogCategory::findOrFail($id);;
        return view('admin.blog_category.blog_category_edit', compact('blogcategory'));
    }

    public function UpdateBlogCategory(Request $request, $id)
    {
        if ($request->file('image_category')) {
            $image = $request->file('image_category');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(460, 550)->save('upload/blog_category/' . $name_gen);
            $save_url = 'upload/blog_category/' . $name_gen;
            BlogCategory::findOrFail($id)->update([
                'blog_category' => $request->blog_category,
                'image_category' => $save_url,
            ]);

            $notification = array(
                'message' => 'Blog Category Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.blog.category')->with($notification);
        } else {

            BlogCategory::findOrFail($id)->update([
                'blog_category' => $request->blog_category,

            ]);

            $notification = array(
                'message' => 'Blog Category Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.blog.category')->with($notification);
        } // end Else

    }


    public function DeleteBlogCategory($id)
    {

        BlogCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog Category Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
