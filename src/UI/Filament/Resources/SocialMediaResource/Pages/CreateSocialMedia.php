<?php

namespace AdminKit\SocialMedias\UI\Filament\Resources\SocialMediaResource\Pages;

use AdminKit\SocialMedias\UI\Filament\Resources\SocialMediaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSocialMedia extends CreateRecord
{
    protected static string $resource = SocialMediaResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }

    protected function getRedirectUrl(): string
    {
        return SocialMediaResource::getUrl();
    }
}
