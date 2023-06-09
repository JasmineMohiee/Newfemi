<?php

use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Controllers\Auth;
use App\Http\livewire\CheckoutComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\WishListComponent;
use App\Http\Livewire\MyAccountcomponent;
use App\Http\Livewire\Admin\AdminCategoriesComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;









/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
//});

//Route::get('/dashboard', function () {
   // return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});  

Route::middleware('auth','authadmin')->group(function () {
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.category.add');
     Route::get('/admin/category/edit/{category_id}',AdminEditCategoryComponent::class)->name('admin.category.edit');
});  


Route::get('/',HomeComponent::class)->name('home.index');

Route::get('/about',AboutComponent::class)->name('about');

Route::get('/contact',ContactComponent::class)->name('contact');

Route::get('/cart',CartComponent::class)->name('shop.cart');

Route::get('/product-category/{slug}',CategoryComponent::class)->name('product.category');

Route::get('/shop',ShopComponent::class)->name('shop');

Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');

Route::get('/checkout',CheckoutComponent::class)->name('shop.checkout');

Route::get('/search',SearchComponent::class)->name('product.search');

Route::get('/wishlist',WishListComponent::class)->name('shop.wishlist');

Route::get('/my-account',MyAccountComponent::class)->name('my-account');


 




require __DIR__.'/auth.php';
