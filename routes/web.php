<?php
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminHomeCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminSaleComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponent;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', \App\Http\Livewire\HomeComponent::class);

Route::get('/shop', \App\Http\Livewire\ShopComponent::class);  //Shop

Route::get('/cart', \App\Http\Livewire\CartComponent::class)->name('product.cart'); //cart route

Route::get('/checkout', \App\Http\Livewire\CheckoutComponent::class)->name('product.checkout'); //checkout route

Route::get('/search',\App\Http\Livewire\SearchComponent::class)->name('product.search');

Route::get('/product/{slug}',\App\Http\Livewire\DetailsComponent::class)->name('product.details');

Route::get('/product-category/{category_slug}',\App\Http\Livewire\CategoryComponent::class)->name('product.category');

Route::get('/thank-you',\App\Http\Livewire\ThankyouComponent::class)->name('thankyou');
    
Route::get('/contact-us',\App\Http\Livewire\ContactComponent::class)->name('contact');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

//for user and customer
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/user/orders',[\App\Http\Livewire\UserOrdersComponent::class])->name('user.orders');
    Route::get('/user/orders/{order_id}',[\App\Http\Livewire\UserOrderDetailsComponent::class])->name('user.orderdetails');
    Route::get('/user/review/{order_item_id}',[\App\Http\Livewire\UserReviewComponent::class])->name('user.review');
    Route::get('/user/change-password',[\App\Http\Livewire\UserChangePasswordComponent::class])->name('user.changepassword');
});

//for admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',[\App\Http\Livewire\AdminCategoryComponent::class])->name('admin.categories');
    Route::get('/admin/category/add',[\App\Http\Livewire\AdminAddCategoryComponent::class])->name('admin.addcategory');
    Route::get('/admin/category/edit/{category_slug}',[\App\Http\Livewire\AdminEditCategoryComponent::class])->name('admin.editcategory');
    Route::get('/admin/products',[\App\Http\Livewire\AdminProductComponent::class])->name('admin.products');
    Route::get('/admin/product/add',[\App\Http\Livewire\AdminAddProductComponent::class])->name('admin.addproducts');
    Route::get('/admin/product/edit/{product_slug}',[\App\Http\Livewire\AdminEditProductComponent::class])->name('admin.editproducts');

    Route::get('/admin/home-categories',[\App\Http\Livewire\AdminHomeCategoryComponent::class])->name('admin.homecategories');
    Route::get('/admin/orders',[\App\Http\Livewire\AdminOrderComponent::class])->name('admin.orders');
    Route::get('/admin/orders/{order_id}',[\App\Http\Livewire\AdminOrderDetailsComponent::class])->name('admin.orderdetails');

    Route::get('/admin/contact-us',[\App\Http\Livewire\AdminContactComponent::class])->name('admin.contact');

});

