<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NoiseResource\Pages;
use App\Filament\Resources\NoiseResource\RelationManagers;
use App\Models\Noise;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class NoiseResource extends Resource
{
    protected static ?string $model = Noise::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->maxLength(255)
                    ->required(),
                FileUpload::make('audio_file_path')
                    ->label('Audio file')
                    ->directory('Noises/Audios')
                    ->acceptedFileTypes(['audio/mpeg'])
                    ->required(),
                FileUpload::make('icon_svg_file_path')
                    ->label('Icon file')
                    ->directory('Noises/Icons')
                    ->acceptedFileTypes(['image/svg+xml'])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name'),
                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->since(),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->since()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListNoises::route('/'),
            'create' => Pages\CreateNoise::route('/create'),
            'edit' => Pages\EditNoise::route('/{record}/edit'),
        ];
    }
}
