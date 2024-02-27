<?php

use AdminKit\SocialMedias\UI\API\Controllers\SocialMediaController;
use Illuminate\Support\Facades\Route;

Route::get('/social-medias', [SocialMediaController::class, 'index']);
