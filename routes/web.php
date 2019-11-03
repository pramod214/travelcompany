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


//Frontend
Route::get('/','FrontEndController@index')->name('front.index');
Route::get('/blogs','FrontEndController@blogs')->name('front.blogs');
Route::get('/blog/details/{id}','FrontEndController@blogdetails')->name('front.blog_details');
Route::get('/tour/details/{id}','FrontEndController@tourdetails')->name('front.tour_details');
Route::get('/tour','FrontEndController@tour')->name('front.tour');
Route::get('/6trfdxdestination','FrontEndController@destination')->name('front.destination');
Route::get('/contact','FrontEndController@contact')->name('front.contact');
Route::get('/404','FrontEndController@error')->name('front.404');

//BackEnd
Auth::routes();

Route::get('/admindashboard','AdminController@admin_dashboard')->name('admin.dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Site Route
Route::get('sites', 'SiteController@index')->name('site.index');
Route::get('sites/create', 'SiteController@create')->name('site.create');
Route::post('sites', 'SiteController@store')->name('site.store');
Route::get('sites/{id}/edit', 'SiteController@edit')->name('site.edit');
Route::post('sites/{id}', 'SiteController@update')->name('site.update');
Route::get('admin/sites/{id}', 'SiteController@delete')->name('site.delete');

//PackageCategory
Route::get('/category','PackageCategoryController@index')->name('category.index');
Route::get('/category/create','PackageCategoryController@create')->name('category.create');
Route::post('/category/store','PackageCategoryController@store')->name('category.store');
Route::get('/admin/category-delete/{id}','PackageCategoryController@delete')->name('category.delete');

//Package
Route::get('/package','PackageController@index')->name('package.index');
Route::get('package/create','PackageController@create')->name('package.create');
Route::post('package/store','PackageController@store')->name('package.store');
Route::get('package/edit/{id}','PackageController@edit')->name('package.edit');
Route::post('package/update/{id}','PackageController@update')->name('package.update');
Route::get('/admin/package-delete/{id}','PackageController@delete')->name('package.delete');

//Package SKU
//Route::get('/images/{id}','PackageController@add')->name('image.add');
//Route::post('/images/store','PackageController@store_image')->name('image.store');

Route::match(['get','post'],'/package/image/{id}','PackageController@add_photo')->name('image.add');
Route::get('/admin/delete-package-image/{id}','PackageController@delete_package_image');

//Blog
Route::get('/blog','BlogController@index')->name('blog.index');
Route::get('/blog/create','BlogController@create')->name('blog.create');
Route::post('/blog/store','BlogController@store')->name('blog.store');
Route::get('/blog/edit/{id}','BlogController@edit')->name('blog.edit');
Route::post('/blog/update/{id}','BlogController@update')->name('blog.update');
Route::get('/admin/blog-delete/{id}','BlogController@delete')->name('blog.delete');

//Slider
Route::get('/slider','SliderController@index')->name('slider.index');
Route::get('/slider/create','SliderController@create')->name('slider.create');
Route::post('/slider/store','SliderController@store')->name('slider.store');
Route::get('/slider/edit/{id}','SliderController@edit')->name('slider.edit');
Route::post('/slider/update/{id}','SliderController@update')->name('slider.update');
Route::get('/admin/slider-delete/{id}','SliderController@delete')->name('slider.delete');

//Book
Route::get('/book','BookController@index')->name('book.index');
Route::post('/book/store','BookController@store')->name('book.store');
Route::get('/approve/{id}','BookController@approve')->name('book.approve');
Route::get('/admin/book-delete/{id}','BookController@delete')->name('book.delete');

//Enquiry
Route::get('/enquiry','EnquiryController@index')->name('enquiry.index');
Route::post('/enquiry/store','EnquiryController@store')->name('enquiry.store');
Route::get('/admin/enquiry-delete/{id}','EnquiryController@delete')->name('enquiry.delete');

// Contact
Route::post('/contact/store','ContactController@store')->name('contact.store');
Route::get('/contact','ContactController@index')->name('contact.index');
Route::get('/admin/contact-delete/{id}','ContactController@delete')->name('contact.delete');

// Logout
Route::get('/logout','AdminController@logout')->name('admin.logout');