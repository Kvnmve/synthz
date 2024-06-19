<?php

use App\Http\Controllers\RegaloController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RegaloController::class, 'showRegalo'])-> name ('homeSynthz');
Route::fallback( function(){
    return view('extra.404');

});
