<?php

namespace App\Filament\Resources\NoiseResource\Pages;

use App\Filament\Resources\NoiseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNoises extends ListRecords
{
    protected static string $resource = NoiseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
