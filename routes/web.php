<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',HomeComponent::class);

Route::get('/aboutus',AboutUsComponent::class);

Route::get('/contactus', ContactUsComponent::class)->name('contact');

Route::get('/shop', ShopComponent::class);

Route::get('/cart', CartComponent::class);

Route::get('/checkout', CheckoutComponent::class);

Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

//For user
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');

});
//For Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/contactus', AdminContactComponent::class)->name('admin.contact');
 

});