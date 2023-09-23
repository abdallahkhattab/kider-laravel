<?php

use App\Http\Controllers\SchoolClassController;
use App\Models\school_class;
use App\Models\SchoolClass;
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

Route::get('/', function () {
    return view('front.index');
});

//front
Route::name('home.')->prefix('/kids')->group(function () {
    Route::get('', function () {
        return view('front.index');
    });

    Route::get('/about', function () {
        return view('front.about');
    })->name('about');

    Route::get('/classes', function () {
        return view('front.classes');
    })->name('class');

    Route::Get('/facility', function () {
        return view('front.facility');
    })->name('facility');

    Route::get('/team', function () {
        return view('front.facility');
    })->name('facility');

    Route::get('/call-to-action', function () {
        return view('front.call-to-action');
    })->name('call-to-action');

    Route::get('/appointment', function () {
        return view('front.appointment');
    })->name('appointment');

    Route::get('/testemonial', function () {
        return view('front.testimonial');
    })->name('testemonial');

    Route::get('/team', function () {
        return view('front.team');
    })->name('team');

    Route::get('/404', function () {
        return view('front.404');
    })->name('404');

    Route::get('/contact', function () {
        return view('front.contact');
    })->name('contact');
});

//dashboard


Route::prefix('/dashboard')->name('dashoboard.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });

    Route::get('/school-class',[SchoolClassController::class,'index'])->name('class');


});
