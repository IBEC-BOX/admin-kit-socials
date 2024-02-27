<?php

namespace AdminKit\SocialMedias\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdminKit\SocialMedias\SocialMedias
 */
class SocialMedias extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdminKit\SocialMedias\SocialMedias::class;
    }
}
