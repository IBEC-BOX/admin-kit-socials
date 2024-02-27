<?php

declare(strict_types=1);

namespace AdminKit\SocialMedias\UI\API\Controllers;

use AdminKit\SocialMedias\Models\SocialMedia;

class SocialMediaController extends Controller
{
    public function index()
    {
        return SocialMedia::all();
    }

    public function show(int $id)
    {
        return SocialMedia::findOrFail($id);
    }
}
