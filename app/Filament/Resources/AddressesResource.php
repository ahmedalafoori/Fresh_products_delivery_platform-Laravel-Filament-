<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AddressesResource\Pages;
use App\Filament\Resources\AddressesResource\RelationManagers;
use App\Models\Addresses;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AddressesResource extends Resource
{
    protected static ?string $model = Addresses::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    public static function form(Form $form): Form
    {

        return $form
            ->schema([

                Forms\Components\TextInput::make('name')
                    ->maxLength(255)
                    ->required()
                    ->label('Name')
                    ->placeholder('Enter the address name')
                    ->helperText('Provide the name of the address'),

                Forms\Components\TextInput::make('description')
                    ->maxLength(255)
                    ->required()
                    ->label('Description')
                    ->placeholder('Enter a brief description')
                    ->helperText('Provide a short description of the address'),

                Forms\Components\TextInput::make('lat')
                    ->maxLength(255)
                    ->required()
                    ->label('Latitude')
                    ->placeholder('Enter latitude coordinates')
                    ->helperText('Provide the latitude of the address'),

                Forms\Components\TextInput::make('lan')
                    ->maxLength(255)
                    ->required()
                    ->label('Longitude')
                    ->placeholder('Enter longitude coordinates')
                    ->helperText('Provide the longitude of the address'),

                Forms\Components\TextInput::make('city')
                    ->maxLength(255)
                    ->required()
                    ->label('City')
                    ->placeholder('Enter the city')
                    ->helperText('Specify the city where the address is located'),

                Forms\Components\BelongsToSelect::make('user_id')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->label('User Name')
                    ->placeholder('Select a user')
                    ->helperText('Select the user associated with this address'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('description')
                    ->label('Description')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('lat')
                    ->label('Latitude')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('lan')
                    ->label('Longitude')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('city')
                    ->label('City')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('user.name')
                    ->label('User Name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                // Define any filters here if needed
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
            // Define any relations here if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAddresses::route('/'),
            'create' => Pages\CreateAddresses::route('/create'),
            'view' => Pages\ViewAddresses::route('/{record}'),
            'edit' => Pages\EditAddresses::route('/{record}/edit'),
        ];
    }
}
