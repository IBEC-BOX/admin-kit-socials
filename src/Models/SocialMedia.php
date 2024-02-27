<?php

namespace AdminKit\SocialMedias\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use AdminKit\SocialMedias\Database\Factories\SocialMediaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class SocialMedia extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'admin_kit_social_medias';

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
    ];

    protected static function newFactory(): SocialMediaFactory
    {
        return new SocialMediaFactory();
    }
}
