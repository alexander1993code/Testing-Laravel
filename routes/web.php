<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome', [
        'tags' => App\Models\Tag::get()
    ]);
});

Route::post('tags', [App\Http\Controllers\TagController::class, 'Store']);

Route::delete('tags/{tag}', [\App\Http\Controllers\TagController::class, 'Destroy']);