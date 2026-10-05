<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\WhyChooseController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ServicePageController;
use App\Http\Controllers\Admin\AboutSectionController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ContactDetailController;
use App\Http\Controllers\Admin\HomeManageContentController;
use App\Http\Controllers\Admin\AboutSectionCommentController;
use App\Http\Controllers\Admin\HeaderFooterController;
use App\Http\Controllers\Admin\BusinessCounterController;
use App\Http\Controllers\Admin\AboutStatsSectionController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\TermsOfUseController;
use App\Http\Controllers\Admin\SecurityPolicyController;
use App\Http\Controllers\Admin\LicensingIntroController;
use App\Http\Controllers\Admin\LicensingWhyChooseController;
use App\Http\Controllers\Admin\LicensingServiceController;
use App\Http\Controllers\Admin\LicensingServiceCategoryController;
use App\Http\Controllers\Admin\LicensingQuoteController;
use App\Http\Controllers\Admin\MediaUploadController;
use App\Http\Controllers\Admin\TeamController;

Route::get('/create-storage-link', function () {
    $source = storage_path('app/public');
    $destination = public_path('storage');

    // Delete existing 'public/storage' folder if it exists
    if (File::exists($destination)) {
        File::deleteDirectory($destination);
    }

    // Create destination folder if not exists
    if (!File::exists($destination)) {
        File::makeDirectory($destination, 0755, true);
    }

    // Copy files from storage/app/public to public/storage
    File::copyDirectory($source, $destination);

    return '✅ Storage files copied successfully to public/storage (no symlink used)';
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('front.blogs');
Route::get('/blog-detail/{slug}', [HomeController::class, 'blog_detail'])->name('front.blog-detail');
Route::get('/about-us', [HomeController::class, 'about'])->name('about-us');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/teams', [HomeController::class, 'teams'])->name('teams');
Route::get('/service/{servicePage}', [HomeController::class, 'showService'])->name('service.show');
Route::get('/search/services', [HomeController::class, 'searchServices'])->name('service.search');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'store'])->name('contact.store');
Route::match(['get', 'post'], '/newsletter/subscribe', [HomeController::class, 'subscribeNewsletter'])->name('newsletter.subscribe');
Route::get('/abcdefg', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/privacy-policy', [HomeController::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/security', [HomeController::class, 'security'])->name('security');
 Route::get('/other-service', [HomeController::class, 'otherservice'])->name('other-service');
 Route::post('/other-service/quote', [HomeController::class, 'storeLicensingQuote'])->name('other-service.quote.store');
 Route::get('/schedule', [HomeController::class, 'schedule'])->name('schedule');
 Route::post('/schedule/demo', [HomeController::class, 'storeScheduleDemo'])->name('schedule.demo.store');

Route::prefix('admin')->name('admin.')->group(function () {
    // Login Routes
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Protected (Only after login)
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/profile/edit', [ProfileController::class, 'editProfile'])->name('profile.edit');
        Route::post('/profile/edit', [ProfileController::class, 'updateProfile'])->name('profile.update');
     Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');
    // slider manage
        Route::resource('sliders', App\Http\Controllers\Admin\SliderController::class);
    // newsletter subscribers
        Route::resource('newsletter-subscribers', App\Http\Controllers\Admin\NewsletterSubscriberController::class)->names('newsletter-subscribers');
    // Add service section
        Route::resource('services', ServiceController::class);
    // why choose
        Route::resource('whychoose', WhyChooseController::class);
    // client logo
        Route::resource('clients', ClientController::class);
        Route::resource('service-pages', ServicePageController::class);
        Route::post('service-pages/{id}/toggle-status', [ServicePageController::class, 'toggleStatus'])->name('service-pages.toggle-status');
        Route::post('service-pages/{id}/toggle-show-on-home', [ServicePageController::class, 'toggleShowOnHome'])->name('service-pages.toggle-show-on-home');
    // blogs
        Route::resource('blogs', BlogController::class)->names('blogs');
    // blog category
        Route::resource('blog-categories', BlogCategoryController::class)->names('blog-categories');
    // service page
        Route::post('service-pages/upload-image', [ServicePageController::class, 'uploadImage'])->name('service-pages.upload-image');
    //  contact manage
        Route::get('/contact', [DashboardController::class, 'contact'])->name('contact');
        Route::delete('/contact/{id}', [DashboardController::class, 'destroy'])->name('contact.destroy');
    // header footer
        Route::get('header-footer', [HeaderFooterController::class, 'index'])->name('header-footer.index');
        Route::get('header-footer/{id}/edit', [HeaderFooterController::class, 'edit'])->name('header-footer.edit');
        Route::put('header-footer/{id}', [HeaderFooterController::class, 'update'])->name('header-footer.update');
    // business counters
        Route::resource('business-counters', BusinessCounterController::class);
    // about stats section
        Route::resource('about-stats-section', AboutStatsSectionController::class);
    // footer top section
        Route::resource('footer-top-section', App\Http\Controllers\Admin\FooterTopSectionController::class)->names('footer-top-section');
    // privacy policy
        Route::resource('privacy-policy', PrivacyPolicyController::class)->names('privacy-policy');
    // terms of use
        Route::resource('terms-of-use', TermsOfUseController::class)->names('terms-of-use');
    // security policy
        Route::resource('security-policy', SecurityPolicyController::class)->names('security-policy');

    // licensing management
        Route::resource('licensing-intro', LicensingIntroController::class)->names('licensing-intro');
        Route::resource('licensing-why-choose', LicensingWhyChooseController::class)->names('licensing-why-choose');
        Route::resource('licensing-service', LicensingServiceController::class)->names('licensing-service');
        Route::delete('licensing-service-categories/{category}', [LicensingServiceController::class, 'destroyCategory'])->name('licensing-service.destroy-category');
        Route::delete('licensing-service-items/{item}', [LicensingServiceController::class, 'destroyItem'])->name('licensing-service.destroy-item');
        Route::resource('licensing-service-categories', LicensingServiceCategoryController::class)->names('licensing-service-categories');
        Route::resource('licensing-quotes', LicensingQuoteController::class)->names('licensing-quotes');
        Route::resource('teams', TeamController::class);
        Route::resource('schedule-demos', App\Http\Controllers\Admin\ScheduleDemoController::class)->names('schedule-demos');
        Route::resource('schedule-page-content', App\Http\Controllers\Admin\SchedulePageContentController::class)->names('schedule-page-content');

    });
});

// Media upload routes (with auth)
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('media-upload', [MediaUploadController::class, 'index'])->name('media-upload.index');
    Route::post('media-upload', [MediaUploadController::class, 'store'])->name('media-upload.store');
    Route::delete('media-upload/{id}', [MediaUploadController::class, 'destroy'])->name('media-upload.destroy');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('auth')->group(function () {

    });
});

        Route::prefix('admin')->name('admin.')->group(function () {

        Route::get('About-Altermed-RCM/{about_altermed_rcm}/edit', [AboutSectionController::class, 'crmedit'])->name('about_altermed_rcm.edit');
        Route::put('About-Altermed-RCM/{about_altermed_rcm}', [AboutSectionController::class, 'crmupdate'])->name('about_altermed_rcm.crmupdate');    
    // about section        
        Route::get('about-section/{about_section}/edit', [AboutSectionController::class, 'edit'])->name('about_section.edit');
        Route::put('about-section/{about_section}', [AboutSectionController::class, 'update'])->name('about_section.update');

        // about_section2
        Route::get('about-section-commitment/{about_section_commitment}/edit', [AboutSectionCommentController::class, 'edit'])->name('about_section_commitment.edit');
        Route::put('about-section-commitment/{about_section_commitment}', [AboutSectionCommentController::class, 'update'])->name('about_section_commitment.update');
    // About page
      Route::get('about-page/{about_page}/index', [AboutSectionController::class, 'index'])
        ->name('about_page.index');

    Route::put('about-page/{about_page}', [AboutSectionController::class, 'updateAboutPage'])
        ->name('about_page.update');
    // testimonials
        Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
        Route::put('/testimonials/{id}', [TestimonialController::class, 'update'])->name('testimonials.update');
        Route::delete('/testimonials/{id}/items/{index}', [TestimonialController::class, 'removeItem'])->name('testimonials.removeItem');
// contact details
    Route::get('contact-details', [ContactDetailController::class, 'index'])->name('contact_details.index');
// Update (single row edit)
    Route::put('contact-details/{contact_detail}', [ContactDetailController::class, 'update'])->name('contact_details.update');
// home content
    Route::get('home-manage-content', [HomeManageContentController::class, 'index'])->name('home-manage-content.index');
    Route::put('home-manage-content/{homeManageContent}', [HomeManageContentController::class, 'update'])->name('home-manage-content.update');

});