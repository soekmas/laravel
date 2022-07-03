<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "fahmi ilmawan",
        "email" => "dev.mikamiko@gmail.com"
    ]);
});


// cara akses controller

Route::get('/blog',[PostController::class,'index']);
Route::get('blog/{post:slug}',[PostController::class,'show']);
Route::get('category/{category:slug}',function(Category $category)
{
        return view('category', [
                'title' => $category->name,
                'posts' => $category->posts,
                'category' => $category->name
        ]);
});

Route::get('/categories',function(){
    return view('categories',[
            'title' => 'Post Categories',
            'categories' => Category::all()
    ]);
});
