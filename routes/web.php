<?php


use App\Models\Carousel;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardCarouselController;
use App\Http\Controllers\UpdatePassController;



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
    return view('home', [
    'title' => 'home',
    'active' => 'home',
    'name' => 'rohmat',
    'kelas' => 'xi rpl 1',
    'email' => 'atnandimas@gmail.com',
    'carousels' => Carousel::all()
]);
});

Route::get('/about', function () {
    return view('about',  [
        "title" => "about",
        'active' => 'about'
]);
});

// menggunakan controller sedangkan yg atas menggunakan closure
Route::get('/posts', [PostController::class, 'index']);

// halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function ()  {
    return view('categories',  [  
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
]);
});
/*Route::get('/categories/{category:slug}', function (Category $category)  {
    return view('posts',  [  
        'title' => "Post by Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load(['category', 'author']), // fungsi load sama 
        seperti with namun digunkan utk relationship
]);
});

Route::get('/authors/{author:username}', function (User $author)  {
    return view('posts',  [  
        'title' => "Post by Author : $author->name",
        'active' => 'posts',
        'posts' => $author->posts->load(['category', 'author']), // fungsi load sama seperti with namun digunkan utk relationship
]);
});*/

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})
->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])
->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)
->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])
->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')
->middleware('admin');

Route::resource('/dashboard/carousels', DashboardCarouselController::class)->except('show')
->middleware('auth');