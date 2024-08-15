<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DeliveryDetailsResource\Pages;
use App\Filament\Resources\DeliveryDetailsResource\RelationManagers;
use App\Models\DeliveryDetails;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DeliveryDetailsResource extends Resource
{
    protected static ?string $model = DeliveryDetails::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('usar_id')
                    ->label('USAR ID')
                    ->required()
                    ->options(function () {
                        return User::all()->pluck('name', 'id');
                    })
                    ->placeholder('Select a USAR')
                    ->searchable()
                    ->columnSpan(['lg' => 2]),

                Forms\Components\TextInput::make('vehicletype')
                    ->label('Vehicle Type')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Enter vehicle type')
                    ->helperText('Type of the vehicle')
                    ->columnSpan(['lg' => 2]),

                Forms\Components\TextInput::make('vehiclenumber')
                    ->label('Vehicle Number')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Enter vehicle number')
                    ->helperText('Number plate of the vehicle')
                    ->columnSpan(['lg' => 2]),

                Forms\Components\FileUpload::make('vehicleimage')
                    ->label('Vehicle Image')
                    ->required()
                    ->image() // Restrict to image files
                    ->maxSize(2048) // Maximum size in kilobytes
                    ->disk('public') // Storage disk
                    ->directory('vehicle_images')
                    ->columnSpan(['lg' => 2])
                    ->helperText('Upload vehicle image'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name') // Display user name
                    ->label('User Name')
                    ->sortable()
                    ->searchable()
                    ->extraAttributes(['class' => 'whitespace-nowrap text-gray-700 font-medium']),

                Tables\Columns\TextColumn::make('vehicletype')
                    ->label('Vehicle Type')
                    ->searchable()
                    ->sortable()
                    ->extraAttributes(['class' => 'whitespace-nowrap text-gray-700']),

                Tables\Columns\TextColumn::make('vehiclenumber')
                    ->label('Vehicle Number')
                    ->searchable()
                    ->sortable()
                    ->extraAttributes(['class' => 'whitespace-nowrap text-gray-700']),

                Tables\Columns\TextColumn::make('vehicleimage')
                    ->label('Vehicle Image')
                    ->html(fn($state) => $state ? '<img src="' . asset('storage/vehicle_images/' . $state) . '" alt="Vehicle Image" style="width: 100px; height: auto;">' : 'No image')
                    ->sortable()
                    ->extraAttributes(['class' => 'whitespace-nowrap']),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->extraAttributes(['class' => 'whitespace-nowrap text-gray-500']),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->extraAttributes(['class' => 'whitespace-nowrap text-gray-500']),
            ])
            ->filters([
                // Define any filters here if needed
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->label('View')
                    ->color('primary')
                    ->icon('heroicon-o-eye'),

                Tables\Actions\EditAction::make()
                    ->label('Edit')
                    ->color('success')
                    ->icon('heroicon-o-pencil'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Delete')
                        ->color('danger')
                        ->icon('heroicon-o-trash'),
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
            'index' => Pages\ListDeliveryDetails::route('/'),
            'create' => Pages\CreateDeliveryDetails::route('/create'),
            'view' => Pages\ViewDeliveryDetails::route('/{record}'),
            'edit' => Pages\EditDeliveryDetails::route('/{record}/edit'),
        ];
    }
}
