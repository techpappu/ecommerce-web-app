<?php


use Illuminate\Support\Facades\Route;

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

# Back-end login - this is an alternative login for backend - user expected to register and login from front-end
Route::get('/admin/login', \App\Http\Controllers\Backend\Index::class)->name('login');
Route::post('/admin/login', \App\Http\Controllers\Backend\Index::class)->name('postLogin');



# Front-end login - this is an alternative login for Front - user expected to register and login from front-end
Route::get('/', \App\Http\Controllers\Frontend\Page\Landing::class)->name('home');
Route::get('/login', \App\Http\Controllers\Frontend\Login::class)->name('frontend.login');
Route::post('/login', \App\Http\Controllers\Frontend\Login::class)->name('frontend.login.post');
Route::get('/logout', function(){auth()->logout(); return redirect()->route('home');})->name('frontend.logout');
Route::get('/register', \App\Http\Controllers\Frontend\Register::class)->name('frontend.register');
Route::post('/register', \App\Http\Controllers\Frontend\Register::class)->name('frontend.register.post');
/*
# Front-end landing page, login and register pages
Route::get('/', \App\Http\Controllers\Frontend\Index::class);
Route::get('/change-password', \App\Http\Controllers\Frontend\ChangePassword::class);
Route::post('/change-password', \App\Http\Controllers\Frontend\ChangePassword::class);
Route::get('/reset-password', \App\Http\Controllers\Frontend\ResetPassword::class);
Route::post('/reset-password', \App\Http\Controllers\Frontend\ResetPassword::class);
Route::get('/profile', \App\Http\Controllers\Frontend\Profile::class);
Route::post('/profile', \App\Http\Controllers\Frontend\Profile::class);
*/

# Front-end category listing, category product listing and product pages
Route::get('/categories', \App\Http\Controllers\Frontend\Category\Index::class)->name('categories');
Route::get('/category/{id}/{slug}', \App\Http\Controllers\Frontend\Category\Product::class)->name('category.single');
Route::get('/product/{id}/{slug}', \App\Http\Controllers\Frontend\Product\Index::class)->name('product.single');


# Front-end cart page
Route::get('/cart', \App\Http\Controllers\Frontend\Cart\Index::class)->name('cart');
Route::post('/discount', \App\Http\Controllers\Frontend\Cart\Discount::class)->name('discount.post');

# Front-end checkout pages
Route::get('/checkout', \App\Http\Controllers\Frontend\Checkout\Index::class)->name('checkout');
Route::post('/checkout', \App\Http\Controllers\Frontend\Checkout\Index::class)->name('checkout.post');
Route::get('/checkout/{id}/payment', \App\Http\Controllers\Frontend\Checkout\Payment::class)->name('checkout.payment');
Route::post('/checkout/{id}/payment', \App\Http\Controllers\Frontend\Checkout\Payment::class)->name('checkout.payment.post');
/*
Route::get('/checkout/delivery', \App\Http\Controllers\Frontend\Checkout\Delivery::class);
Route::post('/checkout/delivery', \App\Http\Controllers\Frontend\Checkout\Delivery::class);
Route::get('/checkout/payment', \App\Http\Controllers\Frontend\Checkout\Payment::class);
Route::post('/checkout/payment', \App\Http\Controllers\Frontend\Checkout\Payment::class);
Route::get('/checkout/response', \App\Http\Controllers\Frontend\Checkout\Response::class);

# Front-end order page
Route::get('/order', \App\Http\Controllers\Frontend\Order\Index::class);
Route::get('/order/status', \App\Http\Controllers\Frontend\Order\Status::class);
Route::post('/order/status', \App\Http\Controllers\Frontend\Order\Status::class);

# Front-end page 
Route::get('/page/{id}/{slug}', \App\Http\Controllers\Frontend\Page\Index::class);
*/