<?php

namespace App\Filament\Resources\SoundCategoryResource\Pages;

use App\Filament\Resources\SoundCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSoundCategory extends EditRecord
{
    protected static string $resource = SoundCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
