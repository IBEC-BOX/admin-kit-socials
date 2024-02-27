<?php

namespace AdminKit\SocialMedias\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use AdminKit\Core\Abstracts\Models\AbstractModel;
use AdminKit\SocialMedias\Database\Factories\SocialMediaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocialMedia extends AbstractModel implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table = 'admin_kit_social_medias';

    protected $fillable = [
        'name',
        'link',
        'sort',
    ];

    protected static function newFactory(): SocialMediaFactory
    {
        return new SocialMediaFactory();
    }
}
