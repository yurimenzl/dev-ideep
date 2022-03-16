<?php

use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\ColaboratorController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CompetenceCompatibilityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CurrencyPlanController;
use App\Http\Controllers\Admin\FormAnswerController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\FormQuestionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PeopleCompatibilityController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PositionCompatibilityController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProfileDataController;
use App\Http\Controllers\Admin\RankingCompatibilityController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TeamCompatibilityController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\TestQuestionController;
use App\Http\Controllers\Admin\TestResultController;
use App\Http\Controllers\Admin\TestSendController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Company
    Route::resource('companies', CompanyController::class, ['except' => ['store', 'update', 'destroy']]);

    // Colaborator
    Route::resource('colaborators', ColaboratorController::class, ['except' => ['store', 'update', 'destroy']]);

    // Tests
    Route::resource('tests', TestController::class, ['except' => ['store', 'update', 'destroy']]);

    // Form Answer
    Route::resource('form-answers', FormAnswerController::class, ['except' => ['store', 'update', 'destroy']]);

    // Test Questions
    Route::resource('test-questions', TestQuestionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Country
    Route::resource('countries', CountryController::class, ['except' => ['store', 'update', 'destroy']]);

    // City
    Route::resource('cities', CityController::class, ['except' => ['store', 'update', 'destroy']]);

    // Profile
    Route::resource('profiles', ProfileController::class, ['except' => ['store', 'update', 'destroy']]);

    // Profile Data
    Route::resource('profile-datas', ProfileDataController::class, ['except' => ['store', 'update', 'destroy']]);

    // Positions
    Route::resource('positions', PositionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Test Result
    Route::resource('test-results', TestResultController::class, ['except' => ['store', 'update', 'destroy']]);

    // Currency Plan
    Route::resource('currency-plans', CurrencyPlanController::class, ['except' => ['store', 'update', 'destroy']]);

    // Form Questions
    Route::resource('form-questions', FormQuestionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Forms
    Route::resource('forms', FormController::class, ['except' => ['store', 'update', 'destroy']]);

    // Position Compatibility
    Route::resource('position-compatibilities', PositionCompatibilityController::class, ['except' => ['store', 'update', 'destroy']]);

    // People Compatibility
    Route::resource('people-compatibilities', PeopleCompatibilityController::class, ['except' => ['store', 'update', 'destroy']]);

    // Ranking Compatibility
    Route::resource('ranking-compatibilities', RankingCompatibilityController::class, ['except' => ['store', 'update', 'destroy']]);

    // Competence Compatibility
    Route::resource('competence-compatibilities', CompetenceCompatibilityController::class, ['except' => ['store', 'update', 'destroy']]);

    // Team Compatibility
    Route::resource('team-compatibilities', TeamCompatibilityController::class, ['except' => ['store', 'update', 'destroy']]);

    // Test Send
    Route::resource('test-sends', TestSendController::class, ['except' => ['store', 'update', 'destroy']]);
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
        Route::get('/', [UserProfileController::class, 'show'])->name('show');
    }
});
