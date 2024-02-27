<?php

namespace AdminKit\SocialMedias\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use AdminKit\SocialMedias\Database\Factories\SocialMediaFactory;

class SocialMedia extends AbstractModel
{
    use HasFactory;

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
