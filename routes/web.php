<?php

use App\Http\Controllers\CandidatesController;
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

Route::get('/home', [CandidatesController::class, 'home'])->name("home")->middleware('auth');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/createCandidateForm', [CandidatesController::class, 'createCandidateForm'])->name('createCandidateForm');


Route::post('/createCandidate',[CandidatesController::class, 'createCandidate'])->name('createCandidate');

Route::post('/castYourVote',[CandidatesController::class, 'castYourVote'])->name('castYourVote');

Route::get('/voting',[CandidatesController::class, 'votingPage'])->name('votingPage');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
