<?php

use App\Http\Controllers\Dashboard\AboutController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\CategorieController;
use App\Http\Controllers\Dashboard\CommunicationController;
use App\Http\Controllers\Dashboard\HeroSectionController;
use App\Http\Controllers\Dashboard\IntroSectionController;
use App\Http\Controllers\Dashboard\PhoneController;
use App\Http\Controllers\Dashboard\PortfolioController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\Settingontroller;
use App\Http\Controllers\Dashboard\SkillController;
use App\Http\Controllers\Dashboard\TestimonialController;
use App\Http\Controllers\Dashboard\WellcomeController;
use App\Http\Controllers\Dashboard\WorkController;
use App\Models\Communication;
use Illuminate\Support\Facades\Route;

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

Route::prefix('dashboard')->middleware(['web' ,'auth', 'verified'])->group(function () {
  Route::get('/', [WellcomeController::class, 'index'])->name('Wellcome');

  // Route to hero-section
  Route::get('/hero-section', [HeroSectionController::class, 'HeroSection'])->name('Hero-Section');
  Route::post('/hero-section-updating', [HeroSectionController::class, 'HeroSection_updating'])->name('Hero-Section-updating');
  //end Route to Hero-Section

  //Route to hero-icon-section
  Route::get('/hero-icon-section', [HeroSectionController::class, 'HeroIconSection'])->name('Hero-Icon-Section');
  Route::post('/hero-icon-section-updating', [HeroSectionController::class, 'HeroIconSection_updating'])->name('Hero-Icon-Section-updating');
  //end Route to hero-icon-section

  //Route to hero-icon-section
  Route::get('/hero-tool-tech-section', [HeroSectionController::class, 'HeroToolTechSection'])->name('hero-tool-tech-section');
  Route::post('/hero-tool-tech-section-updating', [HeroSectionController::class, 'HeroToolTechSection_updating'])->name('hero-tool-tech-section-updating');
  //end Route to hero-icon-section

  //Route to Intro-section
  Route::resource('Intro', IntroSectionController::class);
  //end Route to Intro-section

  //Route to Phone-section
  Route::get('phone-section', [PhoneController::class, 'index'])->name('Phone');
  Route::post('Phone-updating', [PhoneController::class, 'update'])->name('Phone-updating');
  //end Route to Phone-section

  //Route to About-section
  Route::get('about-section', [AboutController::class, 'index'])->name('About');
  Route::post('About-updating', [AboutController::class, 'update'])->name('About-updating');
  //end Route to About-section

  //Route to skills-section
  Route::get('skill-section', [SkillController::class, 'index'])->name('Skill');
  Route::post('skill-updating', [SkillController::class, 'SkillSection_updating'])->name('Skill-updating');
  //end Route to skills-section


  //Route to Portfolio-section
  Route::resource('Portfolio', PortfolioController::class);
  //end Route to Portfolio-section

  //Route to Service-section
  Route::resource('Service', ServiceController::class);
  //end Route to Service-section

  //Route to Service-section
  Route::resource('Work', WorkController::class)->except(['create', 'edit', 'show', 'destory']);
  //end Route to Service-section

  //Route to Testimonial-section
  Route::resource('Testimonial', TestimonialController::class);
  //end Route to Testimonial-section

  //Route to Category-section
  Route::resource('Category', CategorieController::class);
  //end Route to Category-section

  //Route to Blog-section
  Route::resource('Blog', BlogController::class);
  //end Route to Blog-section

  //Route to Communication-section
  Route::get('Communication', [CommunicationController::class,  'index'])->name('Communication.index');
  Route::get('Contact', [CommunicationController::class,  'Contact_render'])->name('Contact.index');
  Route::post('Communication-update', [CommunicationController::class,  'update'])->name('Communication.update');
  //end Route to Communication-section

  //Route to Setting
  Route::get('settings', [Settingontroller::class,  'index'])->name('settings.index');
  Route::post('settings-store', [Settingontroller::class,  'store'])->name('settings.store');
  //end Route to Setting

});
