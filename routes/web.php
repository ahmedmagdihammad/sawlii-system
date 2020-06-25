<?php
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    Route::group(['prefix'=>'{lang}'], function(){
        Route::get('/', 'Frontend\HomeController@index')->name('/');
        Route::get('/freelancer', 'Frontend\HomeController@freelancer')->name('freelancer');
        Route::get('/sub-category/1', 'Frontend\HomeController@sub_category')->name('sub_category');
        Route::get('/search/service', 'Frontend\HomeController@service')->name('service');
        Route::get('/service/test-service', 'Frontend\HomeController@test_service')->name('service.test_service');
        Route::get('/review', 'Frontend\HomeController@review')->name('review'); 
        Route::get('/profile', 'Frontend\ProfileController@index')->name('profile');
        Route::get('/search/jobs/', 'Frontend\HomeController@jobs')->name('jobs');
        Route::get('/signup', 'Frontend\HomeController@signup')->name('signup');
        Route::get('/signup/work', 'Frontend\HomeController@signup_work')->name('signup.work');
        Route::get('/signup/hire', 'Frontend\HomeController@signup_hire')->name('signup.hire');
        Route::get('/signin', 'Frontend\HomeController@signin')->name('signin');
        Route::get('/contact-us', 'Frontend\HomeController@contact_us')->name('contact_us');
        Route::get('/faq', 'Frontend\HomeController@faq')->name('faq');
        Route::get('/blog', 'Frontend\HomeController@blog')->name('blog');
        Route::get('/blog/posts', 'Frontend\HomeController@posts')->name('blog.posts');
        Route::get('/privacy-policy', 'Frontend\HomeController@privacy')->name('privacy_policy');
        Route::get('/terms-and-conditions', 'Frontend\HomeController@terms_and_conditions')->name('terms_and_conditions');
        Route::get('/how-it-works', 'Frontend\HomeController@how_it_works')->name('how_it_works');
        Route::get('/about-us', 'Frontend\HomeController@about_us')->name('about_us');
        Route::get('/forgetPassword', 'Frontend\HomeController@forgetPassword')->name('forgetPassword');
    });
});

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix'=>'{lang}'], function(){
        // Login Freelancer
        Route::get('f/profile', 'Frontend\ProfileController@f_profile')->name('f_profile');
        Route::get('c/profile', 'Frontend\ProfileController@c_profile')->name('c_profile');
        Route::get('c/profile/update', 'Frontend\ProfileController@update')->name('profile.update');
        Route::get('c/profile/update', 'Frontend\ProfileController@update')->name('profile.update');
        Route::get('c/profile/add-skills', 'Frontend\ProfileController@add_skills')->name('profile.add_skills');


        Route::get('/account-setting', 'Frontend\HomeController@account_setting')->name('account_setting');
        Route::get('/wrong-turn', 'Frontend\HomeController@wrong_turn')->name('wrong_turn');
        Route::get('/post-services', 'Frontend\HomeController@post_services')->name('post_services');
        Route::get('/test-job', 'Frontend\HomeController@test_job')->name('test_job');
        Route::get('/profile/1', 'Frontend\HomeController@my_profile')->name('my_profile');
        Route::get('/customer-review-all/1', 'Frontend\HomeController@customer_review_all')->name('customer_review_all');
        Route::get('/my-jobs', 'Frontend\HomeController@my_jobs')->name('my_jobs');
        Route::get('/workroom', 'Frontend\HomeController@workroom')->name('workroom');
        Route::get('/my-jobs/profile/1', 'Frontend\HomeController@profile_job')->name('profile_job');
        Route::get('/my-jobs/my-bids', 'Frontend\HomeController@my_bids')->name('my_bids');
        Route::get('/my-jobs/saved_jobs', 'Frontend\HomeController@saved_jobs')->name('saved_jobs');
        Route::get('/services-order', 'Frontend\HomeController@services_order')->name('services_order');
        Route::get('/my-services', 'Frontend\HomeController@my_services')->name('my_services');
        Route::get('/job-invitations', 'Frontend\HomeController@job_invitations')->name('job_invitations');

        // Login Customer
        Route::get('/financial-dashboard', 'Frontend\HomeController@financial_dashboard')->name('financial_dashboard');
        Route::get('/saved-freelancer', 'Frontend\HomeController@saved_freelancer')->name('saved_freelancer');
        Route::get('/favorite-services', 'Frontend\HomeController@favorite_services')->name('favorite_services');
    });
});
