<?php

declare(strict_types=1);

namespace AdminKit\SocialMedias\UI\API\Controllers;

use AdminKit\SocialMedias\Models\SocialMedia;
use AdminKit\SocialMedias\UI\API\Resources\SocialMediaResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SocialMediaController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $socialMedias = SocialMedia::query()
            ->orderBy('sort')
            ->get();

        return SocialMediaResource::collection($socialMedias);
    }
}
