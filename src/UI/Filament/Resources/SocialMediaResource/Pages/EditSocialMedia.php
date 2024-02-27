<?php

namespace AdminKit\SocialMedias\UI\Filament\Resources\SocialMediaResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use AdminKit\SocialMedias\UI\Filament\Resources\SocialMediaResource;

class EditSocialMedia extends EditRecord
{
    protected static string $resource = SocialMediaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
