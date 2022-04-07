<?php

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




Route::get('/contact-us-ar', function () {
    return view('view-ar.contact-us-ar');
});
Route::get('/about_us-ar', function () {
    return view('view-ar.about_us-ar');
});
Route::get('industry-ar', function () {
    return view('view-ar.industry-ar');
});
Route::get('/subs-ar', function () {
    return view('view-ar.subsidiary-ar');
});
Route::get('/gallery-ar', function () {
    return view('view-ar.gallery-ar');
});


Route::get('/electronic-ar', function () {
    return view('view-ar.electronic-ar');
});
Route::get('/security-ar', function () {
    return view('view-ar.security-ar');
});

Route::get('/environmental-ar', function () {
    return view('view-ar.environmental-ar');
});

Route::get('/integrated-ar', function () {
    return view('view-ar.integrated-ar');
});



Route::get('/contact_us', function () {
    return view('contact-us');
});
Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/industry', function () {
    return view('industry');
});

Route::get('/elec-tronic', function () {
    return view('services-ele');
});
Route::get('/secu-rity', function () {
    return view('services-sec');
});

Route::get('/envir-onmental', function () {
    return view('services-env');
});

Route::get('/inte-grated', function () {
    return view('services-int');
});
Route::get('/subs', function () {
    return view('subsidiary');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});




Route::post('/contact/mail','Controller@send_mail')->name('send.message');
Route::post('/contact/mail-ar','Controller@send_mail_ar')->name('send.message');
Route::get('/gallery','GalleryController@index');
Route::get('/gallery-ar','GalleryController@index_ar');
Route::get('/','Controller@index');
Route::get('/homepage-ar','Controller@index_ar');



Route::post('/contact/apply','Controller@apply_now')->name('send.resume');

Route::post('/contact/apply-ar','Controller@apply_now_ar')->name('send.resume.ar');
Route::post('/contact/subscribe','Controller@subscribe')->name('contact.subscribe');
Route::post('/contact/subscribe-ar','Controller@subscribe_ar')->name('contact.subscribe-ar');
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/news-ar', 'NewsController@news_ar');
Route::get('/admin', 'AdminController@index');
Route::get('/readmore/id={id}', 'NewsController@readmore');
Route::get('/readmore-ar/id={id}', 'NewsController@readmore_ar');
Auth::routes();
