<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilePhotoController;
use App\Http\Controllers\Sections\About\AboutController;
use App\Http\Controllers\Sections\About\AboutTitleController;
use App\Http\Controllers\Sections\Achievement\AchievementController;
use App\Http\Controllers\Sections\Achievement\AchievementTitleController;
use App\Http\Controllers\Sections\Blog\BlogController;
use App\Http\Controllers\Sections\Blog\HeaderController;
use App\Http\Controllers\Sections\BrandController;
use App\Http\Controllers\Sections\Client\ClientController;
use App\Http\Controllers\Sections\Client\ClientFeedController;
use App\Http\Controllers\Sections\CompanyController;
use App\Http\Controllers\Sections\Contact\AddressController;
use App\Http\Controllers\Sections\Contact\ContactController;
use App\Http\Controllers\Sections\Contact\HeadController;
use App\Http\Controllers\Sections\Contact\TopController;
use App\Http\Controllers\Sections\CopyrightController;
use App\Http\Controllers\Sections\FaviconController;
use App\Http\Controllers\Sections\Feature\FeatureController;
use App\Http\Controllers\Sections\Feature\FeatureTitleController;
use App\Http\Controllers\Sections\HomeController;
use App\Http\Controllers\Sections\LinkController;
use App\Http\Controllers\Sections\LogoController;
use App\Http\Controllers\Sections\Pricing\HeadingController;
use App\Http\Controllers\Sections\Pricing\OptionController;
use App\Http\Controllers\Sections\Pricing\PricingController;
use App\Http\Controllers\Sections\VideoController;
use App\Http\Controllers\Sections\Work\CategoryController;
use App\Http\Controllers\Sections\Work\ContentController;
use App\Http\Controllers\Sections\Work\ProjectController;
use Illuminate\Support\Facades\Route;


//Website Front

Route::get('/',[FrontController::class,'index'])->name('home');
Route::post('/',[FrontController::class,'store'])->name('message.store');


Route::middleware(['auth', 'verified'])->group(function () {

//    Dashboard

    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');

});

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//    Profile Photo manage

    Route::resource('/photo', ProfilePhotoController::class);

//    Home Contents manage

    Route::resource('/home', HomeController::class);

//    Logo Manage

    Route::resource('/logo', LogoController::class);

//    Feature Manage

    Route::resource('/feature-title', FeatureTitleController::class);
    Route::resource('/feature', FeatureController::class);

//    Achievement Manage

    Route::resource('/achievement-title', AchievementTitleController::class);
    Route::resource('/achievement', AchievementController::class);


//    About Manage

    Route::resource('/about-title', AboutTitleController::class);
    Route::resource('/about', AboutController::class);

//    Company Manage

    Route::resource('/company', CompanyController::class);

//    Video Manage

    Route::resource('/video', VideoController::class);

//    Brand Manage

    Route::resource('/brand', BrandController::class);

//    Work Manage

    Route::resource('/category', CategoryController::class);
    Route::resource('/content', ContentController::class);
    Route::resource('/project', ProjectController::class);

//    Client Manage

    Route::resource('/client', ClientController::class);
    Route::resource('/feedback', ClientFeedController::class);

//    Blog Manage

    Route::resource('/header', HeaderController::class);
    Route::resource('/blog', BlogController::class);

//    Contact Manage

    Route::resource('/head', HeadController::class);
    Route::resource('/top', TopController::class);
    Route::resource('/address', AddressController::class);

    Route::resource('/contact', ContactController::class);
    Route::get('/change-status/{id}',[ContactController::class,'changeStatus'])->name('change.status');

//    Blog Manage

    Route::resource('/heading', HeadingController::class);
    Route::resource('/pricing', PricingController::class);
    Route::resource('/option', OptionController::class);
    Route::get('/option-status/{id}',[OptionController::class,'changeStatus'])->name('option.status');

//    Link Manage

    Route::resource('/link', LinkController::class);

//    FaviconController & Title Manage

    Route::resource('/favicon', FaviconController::class);

//    CopyrightController Manage

    Route::resource('/copyright', CopyrightController::class);
    Route::get('/copyright-status/{id}',[CopyrightController::class,'changeStatus'])->name('copyright.status');

});

require __DIR__.'/auth.php';
