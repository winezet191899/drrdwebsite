<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    return view('index');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/training', function () {
    return view('training');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

Route::post('/save-content', [App\Http\Controllers\ContentController::class, 'store'])->name('save.content');

Route::get('/pdf-view/{filename}', function ($filename) {
    $path = public_path('pdfs/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    return Response::make(file_get_contents($path), 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="' . $filename . '"',
        'X-Content-Type-Options' => 'nosniff',
        'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
        'Pragma' => 'no-cache',
        'Expires' => '0',
    ]);
});



