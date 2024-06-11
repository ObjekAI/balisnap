<?php

namespace App\Filament\Resources\FoodResource\RelationManagers;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LocationsRelationManager extends RelationManager
{
    protected static string $relationship = 'locations';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $inverseRelationship = 'foods';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama')
                            ->required(),

                        TextInput::make('link')
                            ->label('Google Maps Link')
                            ->required(),

                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->autosize(),
                    ]),

                Section::make('Koordinat')
                    ->schema([
                        TextInput::make('latitude')
                            ->label('Latitude'),

                        TextInput::make('longitude')
                            ->label('Longitude'),
                    ]),

                Section::make('Foto')
                    ->schema([
                        FileUpload::make('image')
                            ->disk('gcs')
                            ->directory('images')
                            ->hiddenLabel()
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '16:9',
                                '4:3',
                                '1:1',
                            ]),
                    ]),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name')
                    ->label('Nama'),

                TextColumn::make('link')
                    ->label('Google Maps Link'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Buat Baru'),

                Tables\Actions\AttachAction::make()
                    ->label('Tambahkan')
                    ->recordSelect(function (Select $select) {
                        return $select->multiple();
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Ubah'),

                Tables\Actions\DetachAction::make()
                    ->label('Lepas'),
            ]);
    }
}
