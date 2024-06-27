<?php

use Illuminate\Support\Facades\Route;

// Web ENglish Language
Route::get('/', function () {
    return view('web/frontend/pages/en/index');
});

Route::get('/about', function () {
   return  view('web/frontend/pages/en/about');
});

//Business
Route::get('/intellegent-integrated-logistic', function () {
   return  view('web/frontend/pages/en/intellegent-integrated-logistic');
});

Route::get('/digital-healthcare', function () {
   return  view('web/frontend/pages/en/digital-healthcare');
});

Route::get('/system-development-management', function () {
   return  view('web/frontend/pages/en/system-development-management');
});

Route::get('/export-voucher', function () {
   return  view('web/frontend/pages/en/export-voucher');
});

// Comunity
Route::get('/news', function () {
   return view('web/frontend/pages/en/news');
});

Route::get('/notice', function () {
   return view('web/frontend/pages/en/notice');
});

Route::get('/notice-details', function () {
   return view('web/frontend/pages/en/notice-details');
});

Route::get('/contact', function () {
   return  view('web/frontend/pages/en/contact');
});

Route::get('/privacy-policy', function () {
   return  view('web/frontend/pages/en/privacy-policy');
});



Route::group([
   'prefix' => '/auth',
   'as' => 'auth',
], function () {
   Route::get('/login', function(){
      return view('web/auth/login');
   });
});

Route::group([
    'prefix'=>'/admin',
    'as' => 'admin.',
    ],
    function () {
        // Dashboard Routes
        Route::get('/', function () {
           return  view('web/backend/pages/dashboard');
        // Our Business Routes
        });
        Route::get('/list-business', function () {
            return  view('web/backend/pages/list-business');
         });
        Route::get('/post-business', function () {
            return  view('web/backend/pages/post-business');
         });

         // Media News Routes
         Route::get('/list-news', [App\Http\Controllers\backend\MediaNewsController::class, 'index'])->name('list.news');
         Route::get('/post-news', function () {
            return  view('web/backend/pages/post-news');
         });
         // Media Video Routes
         Route::get('/list-videos', [App\Http\Controllers\backend\MediaVideosController::class, 'index'])->name('list.videos');
         Route::get('/post-videos', function () {
            return  view('web/backend/pages/post-videos');
         });
         // Notices Routes
         Route::get('/list-notices', function () {
            return  view('web/backend/pages/list-notice');
         });
         Route::get('/post-notices', function () {
            return  view('web/backend/pages/post-notices');
         });
    }
);


