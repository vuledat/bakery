<?php
use App\Http\Middleware\CheckIp;
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

Route::get('/', function (){
    return view('index');
})->name('index');
Route::get('/wc', function (){
    return view('welcome');
})->name('wc');

Route::get('/admin', 'Admin@index')->name('admin');

//Product rotes

Route::get('admin/product/sale/', [
    'uses' => 'Product@sale',
    'as' => 'product.sale'
]);

Route::get('admin/product/post-sale', [
    'uses' => 'Product@postSale',
    'as' => 'product.postSale'
]);

Route::resource('admin/product', 'Product');

Route::get('admin/product/delete/{id}', 'Product@destroy');

//Category routes
//Route::put('admin/category/update/{id}', 'Category@update')->name('category_update');
Route::resource('admin/category', 'Category');
Route::get('admin/category/delete/{id}', 'Category@destroy');

//Member routes
Route::resource('admin/member', 'Member');


//Slider routes
Route::resource('admin/slider', 'Slider');
Route::get('admin/slider/delete/{id}', 'Slider@destroy')->name('slider.delete');

//Infor routes
Route::resource('admin/infor', 'InforController');

Route::resource('admin/user', 'User');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware(CheckIp::class);

//get product by category
Route::get('/category/{category_id}', 'HomeController@getProductByCategory');