<?php

namespace AdminKit\SocialMedias\UI\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use AdminKit\SocialMedias\Models\SocialMedia;
use AdminKit\SocialMedias\UI\Filament\Resources\SocialMediaResource\Pages;

class SocialMediaResource extends Resource
{
    protected static ?string $model = SocialMedia::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\SpatieMediaLibraryFileUpload::make('icon')
                    ->label('Иконка')
                    ->image()
                    ->columnSpan(2)
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->label(__('admin-kit-social-medias::social-medias.resource.name'))
                    ->placeholder('instagram')
                    ->required(),
                Forms\Components\TextInput::make('link')
                    ->url()
                    ->label(__('admin-kit-social-medias::social-medias.resource.link'))
                    ->placeholder('https://www.instagram.com/{profile}')
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('admin-kit-social-medias::social-medias.resource.name')),
                Tables\Columns\TextColumn::make('link')
                    ->label(__('admin-kit-social-medias::social-medias.resource.link')),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('admin-kit-social-medias::social-medias.resource.created_at')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->reorderable('sort')
            ->defaultSort('sort');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSocialMedia::route('/'),
            'create' => Pages\CreateSocialMedia::route('/create'),
            'edit' => Pages\EditSocialMedia::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        return __('admin-kit-social-medias::social-medias.resource.label');
    }

    public static function getPluralLabel(): ?string
    {
        return __('admin-kit-social-medias::social-medias.resource.plural_label');
    }
}
