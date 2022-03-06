<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Http\Controllers\CustomFieldsController;
use App\Http\Controllers\UserSettingsController;
use App\Http\Controllers\SubscriptionController;
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

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/custom_fields', function () {
    $properties = Property::first();
    $name = 'internet_available';
    $properties->C($name, 'Fibre, VDSL, ADSL');
    echo  $properties->getCustomFields($name);
});

Route::post('email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    $request->session()->flash('success', 'Thanks, We have re-sent your Verification email');
    return back();
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/dashboard', function () {
    $properties = Property::where('user_id', '=', auth()->id())->get();
    return Inertia::render('Dashboard', [
        'properties' => $properties

    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('properties', [\App\Http\Controllers\PropertyController::class, 'index'])->name('properties.index');
    Route::post('properties/delete', [\App\Http\Controllers\PropertyController::class, 'destroy']);
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::get('property/custom-attributes', [CustomFieldsController::class, 'index'])->name('custom_fields.index');
    Route::post('property/custom-attributes', [CustomFieldsController::class, 'store'])->name('custom_fields.store');
    Route::post('settings', [UserSettingsController::class, 'store'])->name('custom_fields.store');


    Route::get('/subscription/create', [SubscriptionController::class, 'index'])->name('subscription.create');
    Route::get('/subscription/checkout', [SubscriptionController::class, 'checkout'])->name('subscription.checkout');
    //Route::post('/subscription/create', [SubscriptionController::class, 'store'])->name('subscription.store');
    Route::post('order-post', ['as' => 'order-post', 'uses' => 'SubscriptionController@orderPost']);

    Route::get('/billing-portal', function (Request $request) {
        if($request->user()->stripe_id)
        {
            return $request->user()->redirectToBillingPortal();
        } 
        else
        {
            $request->session()->flash('failure', 'Sorry you are not a customer');
            return back();
        }
        
    });
});
