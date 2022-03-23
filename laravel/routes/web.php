<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostCatalogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCatalogController;
use App\Http\Controllers\OrderController;

use Illuminate\Support\Facades\Session;


use Illuminate\Support\Facades\DB;
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
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginCheck']);
Route::get('/logout',function()
{
    if(session()->has('admin_id'))
    {
        session()->pull('admin_id');
    }
    return redirect('login');
});

Route::prefix('users')->name('users.')->group(function () {


    Route::get('/', [UserController::class, 'index'])->name('index');

    Route::post('/search', [UserController::class, 'search'])->name('search');

    Route::get('/add', [UserController::class, 'addUserForm'])->name('addform');

    Route::post('/add', [UserController::class, 'addUser'])->name('add');

    Route::get('/edit/{id}', [UserController::class, 'editUserForm'])->name('editform');

    Route::post('/edit/{id}', [UserController::class, 'editUser'])->name('edit');

    Route::get('/delete/{id}', [UserController::class, 'deleteUser'])->name('delete');
});

Route::get('uploads/post/{filename}', function ($filename)
{
    return Image::make(storage_path('public/' . $filename))->response();
})->name('filepost');

Route::prefix('posts')->name('posts.')->group(function () {

    Route::get('/', [PostController::class, 'index'])->name('index');

    Route::post('/search', [PostController::class, 'search'])->name('search');

    Route::get('/add', [PostController::class, 'addPostForm'])->name('addform');

    Route::post('/add', [PostController::class, 'addPost'])->name('add');

    Route::get('/edit/{id}', [PostController::class, 'editPostForm'])->name('editform');

    Route::post('/edit/{id}', [PostController::class, 'editPost'])->name('edit');

    Route::get('/delete/{id}', [PostController::class, 'deletePost'])->name('delete');
});


Route::prefix('postcatalog')->name('postcatalog.')->group(function () {

    Route::get('/', [PostCatalogController::class, 'index'])->name('index');

    Route::post('/search', [PostCatalogController::class, 'search'])->name('search');

    Route::get('/add', [PostCatalogController::class, 'addPostCatalogForm'])->name('addform');

    Route::post('/add', [PostCatalogController::class, 'addPostCatalog'])->name('add');

    Route::get('/edit/{id}', [PostCatalogController::class, 'editPostCatalogForm'])->name('editform');

    Route::post('/edit/{id}', [PostCatalogController::class, 'editPostCatalog'])->name('edit');

    Route::get('/delete/{id}', [PostCatalogController::class, 'deletePostCatalog'])->name('delete');
});

Route::get('uploads/product/{filename}', function ($filename)
{
    return Image::make(storage_path('public/' . $filename))->response();
})->name('fileproduct');


Route::prefix('products')->name('products.')->group(function () {

    Route::get('/', [ProductController::class, 'index'])->name('index');

    Route::post('/search', [ProductController::class, 'search'])->name('search');

    Route::get('/add', [ProductController::class, 'addProductForm'])->name('addform');

    Route::post('/add', [ProductController::class, 'addProduct'])->name('add');

    Route::get('/edit/{id}', [ProductController::class, 'editProductForm'])->name('editform');

    Route::post('/edit/{id}', [ProductController::class, 'editProduct'])->name('edit');

    Route::get('/delete/{id}', [ProductController::class, 'deleteProduct'])->name('delete');
});

Route::prefix('productcatalog')->name('productcatalog.')->group(function () {

    Route::get('/', [ProductCatalogController::class, 'index'])->name('index');

    Route::post('/search', [ProductCatalogController::class, 'search'])->name('search');

    Route::get('/add', [ProductCatalogController::class, 'addProductCatalogForm'])->name('addform');

    Route::post('/add', [ProductCatalogController::class, 'addProductCatalog'])->name('add');

    Route::get('/edit/{id}', [ProductCatalogController::class, 'editProductCatalogForm'])->name('editform');

    Route::post('/edit/{id}', [ProductCatalogController::class, 'editProductCatalog'])->name('edit');

    Route::get('/delete/{id}', [ProductCatalogController::class, 'deleteProductCatalog'])->name('delete');
});


Route::prefix('order')->name('orders.')->group(function () {

    Route::get('/', [OrderController::class, 'index'])->name('index');

    Route::post('/search', [OrderController::class, 'search'])->name('search');

    Route::get('/edit/{id}', [OrderController::class, 'editOrderForm'])->name('editform');

    Route::post('/edit/{id}', [OrderController::class, 'editOrder'])->name('edit');

  
});

Route::get('/product-list', [ProductController::class, 'index2']);

Route::get('/index', [ProductController::class, 'index1']
);




Route::get('/loginuser', function (){
        return view('userpage.login2');
});

Route::post('/loginuser', [UserController::class, 'postLogin']);


Route::get('/logoutuser',function()
{
    if(session()->has('userid'))
    {
        session()->pull('userid');
    }
    return redirect('index');
});
   
Route::get('/register', function(){
return view('userpage.register2');
}
);
Route::post('/register', function($request){
    if($request->txt_pass == $request->txt_repass)
        {
        
    
            DB::insert('INSERT INTO user (tenkh, email, password, sdt, diachi, role, gioitinh )
       values (?, ?, ?, ?, ?, ?, ?)', [
                $request->txt_ten,
                $request->email,
                md5($request->txt_pass),
                $request->txt_sdt,
                $request->txt_diachi,
                $request->role = "User",
                $request->rad_gt,
              
    
            ]);
    
            
            
               return view('userpage.login2');
        }
        return view('userpage.register2');
});