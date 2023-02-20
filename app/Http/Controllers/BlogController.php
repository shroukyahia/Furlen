<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use Image;
use Illuminate\Support\Carbon;


class BlogController extends Controller
{
    public function AllBlog()
    {
        $blogs = Blog::latest()->get();
        return view('admin.Blog.all_blogs', compact('blogs'));
    }
    public function AllItems()
    {
        $blogs = Blog::latest()->get();
        return view('user.all_items', compact('blogs'));
    }

    public function create()
    {
        // $categories = BlogCategory::latest()->get();
        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        return view('admin.Blog.create_blog', compact('categories'));
    }

    public function store(Request $request)
    {
        $image = $request->file('blog_image');
        $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(430, 327)->save('upload/blog/' . $image_name);
        $save_url = 'upload/blog/' . $image_name;

        Blog::insert([
            'blog_category_id' => $request->blog_category_id,
            'title' => $request->title,
            'paragraph' => $request->paragraph,
            'price' => $request->price,
            'blog_image' => $save_url,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'Blog Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.blog')->with($notification);
    }

    public function EditBlog($id)
    {

        $blogs = Blog::findOrFail($id);
        $categories = BlogCategory::orderBy('blog_category', 'ASC')->get();
        return view('admin.blog.blogs_edit', compact('blogs', 'categories'));
    } // End Method



    public function UpdateBlog(Request $request)
    {

        $blog_id = $request->id;

        if ($request->file('blog_image')) {
            $image = $request->file('blog_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(430, 327)->save('upload/blog/' . $name_gen);
            $save_url = 'upload/blog/' . $name_gen;

            Blog::findOrFail($blog_id)->update([
                'blog_category_id' => $request->blog_category_id,
                'title' => $request->title,
                'paragraph' => $request->paragraph,
                'price' => $request->price,
                'blog_image' => $save_url,
                'created_at' => Carbon::now(),

            ]);
            $notification = array(
                'message' => 'Blog Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.blog')->with($notification);
        } else {

            Blog::findOrFail($blog_id)->update([
                'blog_category_id' => $request->blog_category_id,
                'title' => $request->title,
                'paragraph' => $request->paragraph,
                'price' => $request->price,

            ]);

            $notification = array(
                'message' => 'Blog Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.blog')->with($notification);
        } // end Else

    } // End Method



    public function DeleteBlog($id)
    {

        $blogs = Blog::findOrFail($id);
        $img = $blogs->blog_image;
        unlink($img);
        Blog::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function ShowItemsOfCategory($id)
    {
        $blogs = Blog::where('blog_category_id', '=', $id)->latest()->get();
        return view('user.itemsOfCategory', compact('blogs'));
    }

    public function itemDetails($id)
    {
        $item = Blog::where('id', '=', $id)->get();
        $blogs = Blog::latest()->paginate(3);

        return view('user.itemsDetails', compact('item'), compact('blogs'));
    }
}
