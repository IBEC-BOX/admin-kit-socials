<?php

namespace AdminKit\SocialMedias\UI\Filament\Resources\SocialMediaResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use AdminKit\SocialMedias\UI\Filament\Resources\SocialMediaResource;

class ListSocialMedia extends ListRecords
{
    protected static string $resource = SocialMediaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
