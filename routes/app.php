<?php

use App\Http\Controllers\Auth\FailedLoginAttemptController;
use App\Http\Controllers\Blog\PostCategoryController;
use App\Http\Controllers\Blog\PostCategoryImportController;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\Blog\PostImportController;
use App\Http\Controllers\Landing\PageController;
use App\Http\Controllers\Landing\PageImportController;
use App\Http\Controllers\Landing\PageCategoryController;
use App\Http\Controllers\Landing\PageCategoryImportController;
use App\Http\Controllers\Config\ConfigController;
use App\Http\Controllers\Config\LocaleController;
use App\Http\Controllers\Config\MailTemplateController;
use App\Http\Controllers\Config\PermissionController;
use App\Http\Controllers\Config\RoleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Master\ProductController;
use App\Http\Controllers\Master\ProductImportController;
use App\Http\Controllers\Master\PortfolioController;
use App\Http\Controllers\Master\PortfolioImportController;
use App\Http\Controllers\Master\GalleryController;
use App\Http\Controllers\Master\GalleryImportController;
use App\Http\Controllers\Master\FaqController;
use App\Http\Controllers\Master\FaqImportController;
use App\Http\Controllers\Master\ServiceListController;
use App\Http\Controllers\Master\ServiceListImportController;
use App\Http\Controllers\Master\PartnerCompanyController;
use App\Http\Controllers\Master\PartnerCompanyImportController;
use App\Http\Controllers\Master\PartnerMemberController;
use App\Http\Controllers\Master\PartnerMemberImportController;
use App\Http\Controllers\Master\PartnerSchoolController;
use App\Http\Controllers\Master\PartnerSchoolImportController;
use App\Http\Controllers\Master\TermController;
use App\Http\Controllers\Master\TermImportController;
use App\Http\Controllers\Master\TestimonyController;
use App\Http\Controllers\Master\TestimonyImportController;
use App\Http\Controllers\Master\SuperiorityController;
use App\Http\Controllers\Master\SuperiorityImportController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\OptionActionController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\OptionImportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectImportController;
use App\Http\Controllers\ViewcontactController;
use App\Http\Controllers\ViewcontactImportController;
use App\Http\Controllers\Master\CompanydataController;
use App\Http\Controllers\Master\CompanydataImportController;
use App\Http\Controllers\Master\ProductCategoryController;
use App\Http\Controllers\Master\ProductCategoryImportController;
use App\Http\Controllers\Master\PortfolioCategoryController;
use App\Http\Controllers\Master\PortfolioCategoryImportController;
use App\Http\Controllers\Master\GalleryCategoryController;
use App\Http\Controllers\Master\GalleryCategoryImportController;
use App\Http\Controllers\Search;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserActionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Utility\ActivityLogController;
use App\Http\Controllers\Utility\BackupController;
use App\Http\Controllers\Utility\TodoActionController;
use App\Http\Controllers\Utility\TodoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Customize\LandingtextController;
use App\Http\Controllers\Customize\LandingtextImportController;
use App\Http\Controllers\Customize\LandingimageController;
use App\Http\Controllers\Customize\LandingimageImportController;
use App\Http\Controllers\Customize\CompanytextController;
use App\Http\Controllers\Customize\CompanytextImportController;
use App\Http\Controllers\Customize\CompanyimageController;
use App\Http\Controllers\Customize\CompanyimageImportController;
use App\Http\Controllers\Customize\GeneralimageController;
use App\Http\Controllers\Customize\GeneralimageImportController;
use App\Http\Controllers\Customize\GeneraltextController;
use App\Http\Controllers\Customize\GeneraltextImportController;
use App\Http\Controllers\Customize\ServiceimageController;
use App\Http\Controllers\Customize\ServiceimageImportController;
use App\Http\Controllers\Customize\ServicetextController;
use App\Http\Controllers\Customize\ServicetextImportController;
use App\Http\Controllers\Master\SocialmediaController;
use App\Http\Controllers\Master\SocialmediaImportController;

// User Routes
Route::prefix('users')->group(function () {
    Route::get('pre-requisite', [UserController::class, 'preRequisite']);
    Route::post('{user}/status', [UserActionController::class, 'status']);
});

Route::apiResource('users', UserController::class);

Route::prefix('user')->group(function () {
    Route::post('preference', [ProfileController::class, 'preference'])
        ->name('preference');
});

Route::middleware('role:admin')->group(function () {
    Route::get('failed-login-attempts', FailedLoginAttemptController::class)
        ->name('failed.login.attempt');
});

Route::prefix('user')->middleware('test.mode.restriction')->group(function () {
    Route::post('password', [ProfileController::class, 'password'])
        ->name('password.change');

    Route::post('profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::post('profile/account', [ProfileController::class, 'account'])
        ->name('profile.account');

    Route::post('profile/verify', [ProfileController::class, 'verify'])
        ->name('profile.verify');

    Route::post('profile/avatar', [ProfileController::class, 'uploadAvatar'])
        ->name('profile.uploadAvatar');

    Route::delete('profile/avatar', [ProfileController::class, 'removeAvatar'])
        ->name('profile.removeAvatar');
});

// Dashboard Routes
Route::get('dashboard/stat', [DashboardController::class, 'stat'])->name('dashboard.stat');
Route::get('dashboard/agenda', [DashboardController::class, 'agenda'])->name('dashboard.agenda');
Route::get('dashboard/chart', [DashboardController::class, 'chart'])->name('dashboard.chart');
Route::get('dashboard/project', [DashboardController::class, 'project'])->name('dashboard.project');
Route::get('dashboard/companydata', [DashboardController::class, 'companydata'])->name('dashboard.companydata');

// Any key search
Route::get('search', Search::class)
    ->name('search');

// Config Routes
Route::prefix('config')->group(function () {
    Route::get('', [ConfigController::class, 'fetch'])
        ->name('config.fetch');

    Route::post('', [ConfigController::class, 'store'])
        ->name('config.store');

    Route::get('mail/test', [ConfigController::class, 'testMailConnection'])
        ->name('config.testMailConnection');
    Route::get('pusher/test', [ConfigController::class, 'testPusherConnection'])
        ->name('config.testPusherConnection');

    Route::post('assets', [ConfigController::class, 'uploadAsset']);
    Route::delete('assets', [ConfigController::class, 'removeAsset']);

    Route::middleware('permission:config:store')->group(function () {
        Route::apiResource('mail-templates', MailTemplateController::class)->only(['index', 'show', 'update']);

        Route::apiResource('roles', RoleController::class)->except(['update']);

        Route::get('permissions/pre-requisite', [PermissionController::class, 'preRequisite']);
        Route::post('permissions/role/assign', [PermissionController::class, 'roleWiseAssign']);
        Route::get('permissions/search', [PermissionController::class, 'search']);
        Route::get('permissions/user/search', [PermissionController::class, 'searchUser']);
        Route::post('permissions/user/assign', [PermissionController::class, 'userWiseAssign']);
    });

    Route::apiResource('locales', LocaleController::class)->middleware('permission:config:store');
});

// Option Routes
Route::prefix('')->group(function () {
    Route::get('options/pre-requisite', [OptionController::class, 'preRequisite'])->name('options.preRequisite')->middleware('option.verifier');
    Route::post('options/import', OptionImportController::class)->middleware('option.verifier');
    Route::post('options/reorder', [OptionActionController::class, 'reorder'])->middleware('option.verifier');
    Route::apiResource('options', OptionController::class)->middleware('option.verifier');
    Route::get('master/products/pre-requisite', [ProductController::class, 'preRequisite']);
    Route::get('master/portfolios/pre-requisite', [PortfolioController::class, 'preRequisite']);
    Route::get('master/gallerys/pre-requisite', [GalleryController::class, 'preRequisite']);
    Route::get('blog/posts/pre-requisite', [PostController::class, 'preRequisite']);
    Route::get('landing/pages/pre-requisite', [PageController::class, 'preRequisite']);
});

// Utility Routes
Route::prefix('utility')->group(function () {
    Route::prefix('todos')->middleware('permission:todo:manage')->group(function () {
        Route::get('pre-requisite', [TodoController::class, 'preRequisite'])->name('todos.preRequisite');
        Route::post('{todo}/status', [TodoActionController::class, 'status'])->name('todos.status');
        Route::post('{todo}/archive', [TodoActionController::class, 'archive'])->name('todos.archive');
        Route::post('{todo}/unarchive', [TodoActionController::class, 'unarchive'])->name('todos.unarchive');
        Route::post('reorder', [TodoActionController::class, 'reorder'])->name('todos.reorder');
        Route::post('lists/move', [TodoActionController::class, 'moveList'])->name('todos.moveList');
    });

    Route::post('todos/delete', [TodoController::class, 'destroyMultiple']);
    Route::apiResource('todos', TodoController::class)->middleware('permission:todo:manage');

    Route::apiResource('backups', BackupController::class)->only(['index', 'destroy'])->middleware('permission:backup:manage');

    Route::apiResource('activity-logs', ActivityLogController::class)->only(['index', 'destroy'])->middleware('permission:activity-log:manage');
});

Route::post('/images/upload', [ImageController::class, 'upload'])->name('image.upload');


Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.us.store');

Route::get('tags', [TagController::class, 'index'])->name('tags.index');

Route::resource('medias', MediaController::class)->only(['store', 'destroy']);

Route::post('projects/import', ProjectImportController::class);
Route::apiResource('projects', ProjectController::class);

Route::post('viewcontacts/import', ViewcontactImportController::class);
Route::apiResource('viewcontacts', ViewcontactController::class);

Route::prefix('master')->group(function () {
    Route::post('companydatas/import', CompanydataImportController::class);
    Route::apiResource('companydatas', CompanydataController::class);
    Route::post('socialmedias/import', SocialmediaImportController::class);
    Route::apiResource('socialmedias', SocialmediaController::class);
    Route::post('products/import', ProductImportController::class);
    Route::apiResource('products', ProductController::class);
    Route::post('productcategories/import', ProductCategoryImportController::class);
    Route::apiResource('productcategories', ProductCategoryController::class);
    Route::post('portfolios/import', PortfolioImportController::class);
    Route::apiResource('portfolios', PortfolioController::class);
    Route::post('portfoliocategories/import', PortfolioCategoryImportController::class);
    Route::apiResource('portfoliocategories', PortfolioCategoryController::class);
    Route::post('gallerys/import', GalleryImportController::class);
    Route::apiResource('gallerys', GalleryController::class);
    Route::post('gallerycategories/import', GalleryCategoryImportController::class);
    Route::apiResource('gallerycategories', GalleryCategoryController::class);
    Route::post('partnercompanys/import', PartnerCompanyImportController::class);
    Route::apiResource('partnercompanys', PartnerCompanyController::class);
    Route::post('partnermembers/import', PartnerMemberImportController::class);
    Route::apiResource('partnermembers', PartnerMemberController::class);
    Route::post('partnerschools/import', PartnerSchoolImportController::class);
    Route::apiResource('partnerschools', PartnerSchoolController::class);
    Route::post('faqs/import', FaqImportController::class);
    Route::apiResource('faqs', FaqController::class);
    Route::post('servicelists/import', ServiceListImportController::class);
    Route::apiResource('servicelists', ServiceListController::class);
    Route::post('terms/import', TermImportController::class);
    Route::apiResource('terms', TermController::class);
    Route::post('testimonys/import', TestimonyImportController::class);
    Route::apiResource('testimonys', TestimonyController::class);
    Route::post('superioritys/import', SuperiorityImportController::class);
    Route::apiResource('superioritys', SuperiorityController::class);
});
Route::prefix('customize')->group(function () {
    Route::post('landingtexts/import', LandingtextImportController::class);
    Route::apiResource('landingtexts', LandingtextController::class);
    Route::post('landingimages/import', LandingimageImportController::class);
    Route::apiResource('landingimages', LandingimageController::class);
    Route::post('servicetexts/import', ServicetextImportController::class);
    Route::apiResource('servicetexts', ServicetextController::class);
    Route::post('serviceimages/import', ServiceimageImportController::class);
    Route::apiResource('serviceimages', ServiceimageController::class);
    Route::post('companytexts/import', CompanytextImportController::class);
    Route::apiResource('companytexts', CompanytextController::class);
    Route::post('companyimages/import', CompanyimageImportController::class);
    Route::apiResource('companyimages', CompanyimageController::class);
    Route::post('generalimages/import', GeneralimageImportController::class);
    Route::apiResource('generalimages', GeneralimageController::class);
    Route::post('generaltexts/import', GeneraltextImportController::class);
    Route::apiResource('generaltexts', GeneraltextController::class);;
});
Route::prefix('blog')->group(function () {
    Route::post('posts/import', PostImportController::class);
    Route::apiResource('posts', PostController::class);
    Route::post('postcategories/import', PostCategoryImportController::class);
    Route::apiResource('postcategories', PostCategoryController::class);
});
Route::prefix('landing')->group(function () {
    Route::post('pages/import', PageImportController::class);
    Route::apiResource('pages', PageController::class);
    Route::post('pagecategories/import', PageCategoryImportController::class);
    Route::apiResource('pagecategories', PageCategoryController::class);
});


