<?php

namespace AdminKit\SocialMedias\UI\Filament\Resources\SocialMediaResource\Pages;

use AdminKit\SocialMedias\UI\Filament\Resources\SocialMediaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

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
