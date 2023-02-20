<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogCategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin_dashboard');
})->middleware(['auth', 'verified'])->name('admin_dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




// Route::get('/', function () {
//     return view('frontend.index');
// });
// Route::get('/auth/register', function () {
//     return view('auth.register')->name('register');
// });
// Route::get('/dashboard', function () {
//     return view('admin.index');
// })->middleware(['auth', 'verified'])->name('dashboard');





/*******************************************************************************************/
Route::get('/admin/dashboard', function () {
    return view('overview');
})->middleware(['auth', 'verified'])->name('admin_dashboard');



Route::controller(BlogController::class)->group(function () {
    Route::get('/all/blogs', 'AllBlog')->name('all.blog');
    Route::get('/all/items', 'AllItems')->name('all.items');

    Route::get('/create/blog', 'create')->name('create.blog');

    Route::get('/category/items/{id}', 'ShowItemsOfCategory')->name('category.items');
    Route::get('/item/cart/{id}', 'itemDetails')->name('item.details');


    Route::post('/store/blog', 'store')->name('store.blog');
    Route::get('/edit/blog/{id}', 'EditBlog')->name('edit.blog');

    Route::post('/update/blog', 'UpdateBlog')->name('update.blog');
    Route::get('/delete/blog/{id}', 'DeleteBlog')->name('delete.blog');

    Route::get('/blog/details/{id}', 'BlogDetails')->name('blog.details');
    Route::get('/category/blog/{id}', 'CategoryBlog')->name('category.blog');

    Route::get('/blog', 'HomeBlog')->name('home.blog');
});
/*********************************************************************************************/
Route::controller(BlogCategoryController::class)->group(function () {
    Route::get('/all/blog/category', 'AllBlogCategory')->name('all.blog.category');
    Route::get('/add/blog/category', 'AddBlogCategory')->name('add.blog.category');

    // Route::get('/category/items', 'itemsOfCategory')->name('category.items');

    Route::post('/store/blog/category', 'StoreBlogCategory')->name('store.blog.category');
    Route::get('/edit/blog/category/{id}', 'EditBlogCategory')->name('edit.blog.category');

    Route::post('/update/blog/category/{id}', 'UpdateBlogCategory')->name('update.blog.category');
    Route::get('/delete/blog/category/{id}', 'DeleteBlogCategory')->name('delete.blog.category');
});
/*********************************************************************************************/
Route::get('/home', function () {
    return view('user.home');
});
Route::get('/contactus', function () {
    return view('user.contactUs');
});
Route::get('/home/items', function () {
    return view('user.itemsOfCategory');
});

/*********************************************************************************************/



/*********************************************************************************************/



require __DIR__ . '/auth.php';



/*********************************************************************************************/