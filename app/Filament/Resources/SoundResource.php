<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SoundResource\Pages;
use App\Models\Sound;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SoundResource extends Resource
{
    protected static ?string $model = Sound::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->maxLength(255)
                    ->required(),
                Select::make('category')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload(),
                FileUpload::make('audio_file_path')
                    ->label('Audio file')
                    ->directory('Noises/Audios')
                    ->acceptedFileTypes(['audio/mpeg'])
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
                    ->since(),
                TextColumn::make('category.name')
                    ->label('Category')
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
            'index' => Pages\ListSounds::route('/'),
            'create' => Pages\CreateSound::route('/create'),
            'edit' => Pages\EditSound::route('/{record}/edit'),
        ];
    }
}
