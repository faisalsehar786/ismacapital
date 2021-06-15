<?php
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
/*
 * Admin Routes
*/




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

                // Fontend Routes



Auth::routes();
Route::middleware('auth','redirectauthplayer')->group(function ()
{

Route::get('/dashboard','HomeController@show_dashboard')->name('dashboard');//Open Dashboard
Route::get('/edit_value/{id}','HomeController@edit_commission_fee');
Route::post('/update-transection-fee/{id}','HomeController@update_commission_fee');

Route::get('/get_all_payments_orders_data','PaymentsOrdersController@get_all_payments_orders_data')->name('get_all_payments_orders_data');

Route::get('/get_all_payments_orders_data_buy','PaymentsOrdersController@get_all_payments_orders_data_buy')->name('get_all_payments_orders_data_buy');

Route::get('/get_all_payments_orders_data_buy_ajax','PaymentsOrdersController@get_all_payments_orders_data_buy_ajax')->name('get_all_payments_orders_data_buy_ajax');

Route::get('/get_all_user_data','HomeController@get_all_user_data')->name('get_all_user_data');

Route::get('/get_all_user_data_ajax','HomeController@get_all_user_data_ajax')->name('get_all_user_data_ajax');

Route::post('/updateuser_data','HomeController@updateuser_data')->name('updateuser_data');

Route::get('/get_all_payments_orders_data_ajax','PaymentsOrdersController@get_all_payments_orders_data_ajax')->name('get_all_payments_orders_data_ajax'); 

Route::post('/del_pay_order_ajax','PaymentsOrdersController@del_pay_order_ajax')->name('del_pay_order_ajax');

Route::post('/del_user_ajax','HomeController@del_user_ajax')->name('del_user_ajax');

Route::get('/edit_user_value/{id}','HomeController@edit_user_value')->name('edit_user_value');

Route::get('/edit_order_value/{id}','HomeController@edit_order_value')->name('edit_order_value');

Route::get('/edit_order_value_buy/{id}','HomeController@edit_order_value_buy')->name('edit_order_value_buy'); 

Route::post('/update-order-value/{id}','HomeController@Update_Order')->name('Update_Order');

Route::post('/update_order_value_ajax','HomeController@update_order_value_ajax')->name('update_order_value_ajax');

Route::post('/sendMailConf_ajax','HomeController@sendMailConf_ajax')->name('sendMailConf_ajax');
  
Route::get('/edit_meta_Tag/{id}','HomeController@edit_meta_Tag')->name('edit_meta_Tag'); 

Route::post('post_meta_Tag_save','HomeController@post_meta_Tag_save')->name('post_meta_Tag_save'); 

///////////////// blog/////////////////////////////////////////////////////
Route::get('blog-admin','BlogController@index')->name('blog-admin'); 
Route::get('editblog/{id}','BlogController@editblog')->name('editblog'); 
Route::get('/get_blog','BlogController@get_blog_ajax')->name('get_blog_ajax');
Route::get('/add_blog','BlogController@add_blog')->name('add_blog');
Route::post('/del_blog','BlogController@del_blog_ajax')->name('del_blog_ajax');
Route::post('save_blog','BlogController@save_blog')->name('save_blog');
Route::post('upadate_blog','BlogController@upadate_blog')->name('upadate_blog');
///////////////////////////// end Blog ////////////////////////////////////////


///////////////// blog/////////////////////////////////////////////////////
Route::get('review-admin','ReviewController@index')->name('review-admin'); 
Route::get('editreview/{id}','ReviewController@editreview')->name('editreview'); 
Route::get('/get_review','ReviewController@get_review_ajax')->name('get_review_ajax');
Route::get('/add_review','ReviewController@add_review')->name('add_review');
Route::post('/del_review','ReviewController@del_review_ajax')->name('del_review_ajax');
Route::post('save_review','ReviewController@save_review')->name('save_review');
Route::post('upadate_review','ReviewController@upadate_review')->name('upadate_review');
///////////////////////////// end Blog ////////////////////////////////////////



 
});



Route::middleware('auth','verified')->group(function ()
{
Route::get('my_profile_sell_order','HomeController@my_profile_sell_order')->name('my_profile_sell_order');
Route::get('my_profile_buy_order','HomeController@my_profile_buy_order')->name('my_profile_buy_order');
Route::get('my_profile','HomeController@my_profile')->name('my_profile');
Route::post('/myaccountUpdate','HomeController@myaccountUpdate')->name('myaccountUpdate');
Route::get('notification/{search}','HomeController@notification')->name('notification');
Route::post('getFreshNotification','HomeController@getFreshNotification')->name('getFreshNotification');

Route::get('inbox/{id}','HomeController@ShowFreshNotification')->name('ShowFreshNotification');

Route::get('review/{orderId}','HomeController@giveReview')->name('giveReview');


});

  

Route::get('/','HomeController@index')->name('homePage');//View Site


Route::get('/sell','HomeController@sell');//View Site


Route::get('/buy','HomeController@buy');//View Site

// Route::get('/testing','HomeController@testing');//View Site


Route::get('/api','BitconController@store');//Open Dashboard
Route::post('/make_order','HomeController@make_order')->name('make_order')->middleware('ordermangesell');//make_order
Route::post('/make_order_buy','HomeController@make_order_buy')->name('make_order_buy')->middleware('ordermangesbuy');//make_order
Route::post('/converter','HomeController@converter')->name('converter');//btc converter\
Route::post('/confirm_order','HomeController@confirm_order')->name('confirm_order');//btc converter
 
Route::post('/confirm_order_buy','HomeController@confirm_order_buy')->name('confirm_order_buy');//btc converter
Route::post('/thanks','PaymentsOrdersController@thanks')->name('thanks');
                // Backend Routs

Route::post('/review','HomeController@review')->name('review');







Route::get('/profile','TestingController@index');


Route::get('/contact', function()
{
    return view('contact');
}); 

Route::get('/support', function()
{
    return view('support');
});

Route::get('/blog', function()
{
    return view('blog')->with('blogs',App\Blog::orderBy('created_at', 'desc')->paginate(6));
});

Route::get('/legal', function()
{
    return view('legal');
});

Route::get('/blog_single/{id}','BlogController@blog_single')->name('blog_single');
// Route::get('/testing','TestingController@index');
// Route::post('/create-order','TestingController@store');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes(['verify' => true]); 




Route::get('testmail','HomeController@mailTest')->name('mailTest');

Route::get('/dashcheck', function()
{
    return view('admin_layout_second');
});

Route::get('command', function () {
     

    /* php artisan migrate */
    \Artisan::call('config:cache');
    \Artisan::call('route:clear');
     \Artisan::call('cache:clear');
       \Artisan::call('view:clear');
   return 'done';
});
