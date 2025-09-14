
<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\testt;
use App\Http\Controllers\ResultController;

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


Route::prefix('admin')
    ->middleware(['auth'])
    ->group(function () {
        Route::resource('quiz', QuizController::class);
        Route::get('result', [ResultController::class, 'index']);
        Route::resource('question', QuestionController::class);
        Route::get('question/add/{id}', [QuestionController::class, 'create']);
        Route::post('question/add/{id}', [QuestionController::class, 'store']);
    });

Route::get('fbgroup', [ResultController::class, 'fbgroup']);
Route::post('answer/{quiz}', [QuizController::class, 'answer']);
Route::get('list', [QuizController::class, 'list']);
Route::get('name/{quizId}', [ResultController::class, 'list']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/circular', function () {
    return view('circular');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
