<?php
//  Login
Route::get('/login','LoginController@index')->name('login.form');
Route::post('login','LoginController@login')->name('login');
//  Contact
Route::get('contacts','FrontController@contact')->name('contacts');
//  Question
Route::post('question/store','QuestionController@store')->name('question.store');
//  Question
Route::post('quick_contact','QuestionController@contacts')->name('quick.contact');

Route::middleware('auth')->group(function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    //  User
    Route::get('user','UserController@index')->name('user.index');
    Route::get('user/create','UserController@create')->name('user.create');
    Route::post('user/store','UserController@store')->name('user.store');
    Route::get('user/show/{id}','UserController@show')->name('user.show');
    Route::get('user/edit/{id}','UserController@edit')->name('user.edit');
    Route::POST('user/update/{id}','UserController@update')->name('user.update');
    Route::POST('user/destroy/{id}','UserController@destroy')->name('user.destroy');
    //  Contact
    Route::get('contact/index','ContactController@index')->name('contact.index');
    Route::get('contact','ContactController@contact_settings')->name('contact_settings');
    Route::post('contact/store','ContactController@update_contact_settings')->name('update_contact_settings');
    Route::get('contact/edit/{id}','ContactController@edit')->name('contact.edit');
    Route::POST('contact/update/{id}','ContactController@update')->name('contact.update');
    Route::POST('contact/destroy/{id}','ContactController@destroy')->name('contact.destroy');
    //  About
    Route::get('about','AboutController@index')->name('about.index');
    Route::get('about/create','AboutController@create')->name('about.create');
    Route::post('about/store','AboutController@store')->name('about.store');
    Route::get('about/show/{id}','AboutController@show')->name('about.show');
    Route::get('about/edit/{id}','AboutController@edit')->name('about.edit');
    Route::POST('about/update/{id}','AboutController@update')->name('about.update');
    Route::POST('about/destroy/{id}','AboutController@destroy')->name('about.destroy');
    //  Practice
    Route::get('practice','PracticeController@index')->name('practice.index');
    Route::get('practice/create','PracticeController@create')->name('practice.create');
    Route::post('practice/store','PracticeController@store')->name('practice.store');
    Route::get('practice/show/{id}','PracticeController@show')->name('practice.show');
    Route::get('practice/edit/{id}','PracticeController@edit')->name('practice.edit');
    Route::POST('practice/update/{id}','PracticeController@update')->name('practice.update');
    Route::POST('practice/destroy/{id}','PracticeController@destroy')->name('practice.destroy');
    //  Team
    Route::get('team','TeamController@index')->name('team.index');
    Route::get('team/create','TeamController@create')->name('team.create');
    Route::post('team/store','TeamController@store')->name('team.store');
    Route::get('team/show/{id}','TeamController@show')->name('team.show');
    Route::get('team/edit/{id}','TeamController@edit')->name('team.edit');
    Route::POST('team/update/{id}','TeamController@update')->name('team.update');
    Route::POST('team/destroy/{id}','TeamController@destroy')->name('team.destroy');
    //    Member
    Route::get('member','MembershipController@index')->name('member.index');
    Route::get('member/create','MembershipController@create')->name('member.create');
    Route::post('member/store','MembershipController@store')->name('member.store');
    Route::get('member/show/{id}','MembershipController@show')->name('member.show');
    Route::get('member/edit/{id}','MembershipController@edit')->name('member.edit');
    Route::POST('member/update/{id}','MembershipController@update')->name('member.update');
    Route::POST('member/destroy/{id}','MembershipController@destroy')->name('member.destroy');
    //  Slider
    Route::resource('slider', 'SliderController');
    Route::get('slider','SliderController@index')->name('slider.index');
    Route::get('slider/create','SliderController@create')->name('slider.create');
    Route::post('slider/store','SliderController@store')->name('slider.store');
    Route::get('slider/show/{id}','SliderController@show')->name('slider.show');
    Route::get('slider/edit/{id}','SliderController@edit')->name('slider.edit');
    Route::POST('slider/update/{id}','SliderController@update')->name('slider.update');
    Route::POST('slider/destroy/{id}','SliderController@destroy')->name('slider.destroy');
    //  logout
    Route::post('logout',function (){
        auth()->logout();
        return redirect()->route('login.form');
    })->name('logout');
});
//  Frontend
Route::get('/','FrontController@index')->name('home');
//About us
Route::get('about_us','FrontController@about')->name('aboutus');
//Service details
Route::get('/service-details/{id}','FrontController@service')->name('service-details');
//Team
Route::get('/{slug_name}','FrontController@team')->name('teams');


