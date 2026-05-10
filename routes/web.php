<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NotifyController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ShowController as AdminShowController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\InquiryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/sitemap.xml', [HomeController::class, 'sitemap'])->name('sitemap');

// Email notification signup
Route::post('/notify', [NotifyController::class, 'store'])->name('notify.store');

// Contact / booking inquiry
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// City interest poll
Route::post('/poll/vote', [PollController::class, 'vote'])->name('poll.vote');
Route::get('/poll/results', [PollController::class, 'results'])->name('poll.results');

/*
|--------------------------------------------------------------------------
| Admin Routes  (simple auth via middleware)
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {

    // Login
    Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');

    // Protected admin area
    Route::middleware('admin.auth')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Shows / Concert Dates
        Route::resource('shows', AdminShowController::class);

        // Subscribers
        Route::get('subscribers', [SubscriberController::class, 'index'])->name('subscribers.index');
        Route::delete('subscribers/{subscriber}', [SubscriberController::class, 'destroy'])->name('subscribers.destroy');
        Route::get('subscribers/export', [SubscriberController::class, 'export'])->name('subscribers.export');

        // Inquiries
        Route::get('inquiries', [InquiryController::class, 'index'])->name('inquiries.index');
        Route::get('inquiries/{inquiry}', [InquiryController::class, 'show'])->name('inquiries.show');
        Route::patch('inquiries/{inquiry}/read', [InquiryController::class, 'markRead'])->name('inquiries.read');
        Route::delete('inquiries/{inquiry}', [InquiryController::class, 'destroy'])->name('inquiries.destroy');
    });
});


