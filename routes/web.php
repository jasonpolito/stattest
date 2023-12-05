<?php

use App\Http\Controllers\ImportController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Statamic\Facades\Entry;
use Illuminate\Http\Request;

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

// Route::get('import-data', [ImportController::class, 'import']);
// Route::statamic('services', 'services.index');
Route::statamic('/', 'homepage');
Route::statamic('/search', 'search', (function () {
    $q = request()->input('q');
    return [
        'meta_title' => $q ? "Halifax Health - Search results for \"$q\"" : null
    ];
})())->name("search.index");

// Route::post('/submit-search', function (Request $request) {
//     return redirect()->route('search.index', [
//         'query' => $request->input('query')
//     ]);
// });
