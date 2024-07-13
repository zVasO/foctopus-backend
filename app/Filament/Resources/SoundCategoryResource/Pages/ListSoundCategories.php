<?php

namespace App\Filament\Resources\SoundCategoryResource\Pages;

use App\Filament\Resources\SoundCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSoundCategories extends ListRecords
{
    protected static string $resource = SoundCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
