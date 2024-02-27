<?php

use Illuminate\Support\Facades\Route;
use AdminKit\SocialMedias\UI\API\Controllers\SocialMediaController;

Route::get('/social-medias', [SocialMediaController::class, 'index']);
Route::get('/social-medias/{id}', [SocialMediaController::class, 'show']);
