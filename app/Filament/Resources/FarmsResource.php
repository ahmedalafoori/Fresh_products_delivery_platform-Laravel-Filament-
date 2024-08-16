<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FarmsResource\Pages;
use App\Filament\Resources\FarmsResource\RelationManagers;
use App\Models\Addresses;
use App\Models\Farms;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FarmsResource extends Resource
{
    protected static ?string $model = Farms::class;

    protected static ?string $navigationIcon = 'heroicon-o-sun';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Farm Name')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Enter farm name')
                    ->helperText('The name of the farm')
                    ->columnSpan(['lg' => 2]),

                Forms\Components\TextInput::make('commercialregistrationno')
                    ->label('Commercial Registration No')
                    ->required()
                    ->numeric()
                    ->placeholder('Enter registration number')
                    ->helperText('The registration number for commercial purposes')
                    ->columnSpan(['lg' => 2]),

                Forms\Components\FileUpload::make('image')
                    ->label('Farm Image')
                    ->image() // Restrict to image files
                    ->maxSize(2048) // Maximum size in kilobytes
                    ->disk('public') // Storage disk
                    ->directory('farm_images') // Directory to store images
                    ->columnSpan(['lg' => 2])
                    ->helperText('Upload an image of the farm'),

                Select::make('user_id')
                    ->label('User')
                    ->required()
                    ->options(User::all()->pluck('name', 'id'))
                    ->placeholder('Select a user')
                    ->columnSpan(['lg' => 2]),

                Select::make('address_id')
                    ->label('Address')
                    ->required()
                    ->options(Addresses::all()->pluck('name', 'id'))
                    ->placeholder('Select an address')
                    ->columnSpan(['lg' => 2]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Farm Name')
                    ->searchable()
                    ->extraAttributes(['class' => 'text-gray-700 font-medium']),

                Tables\Columns\TextColumn::make('commercialregistrationno')
                    ->label('Registration No')
                    ->numeric()
                    ->sortable()
                    ->extraAttributes(['class' => 'text-gray-700']),

                Tables\Columns\ImageColumn::make('image')
                    ->label('Farm Image')
                    ->circular()// لجعل الصورة دائرية إذا رغبت
                    ->extraAttributes(['class' => 'text-center']),

                Tables\Columns\TextColumn::make('user.name') // Display user name
                    ->label('User')
                    ->sortable()
                    ->extraAttributes(['class' => 'text-gray-700']),

                Tables\Columns\TextColumn::make('address.name') // Display address name
                    ->label('Address')
                    ->sortable()
                    ->extraAttributes(['class' => 'text-gray-700']),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->extraAttributes(['class' => 'text-gray-500']),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->extraAttributes(['class' => 'text-gray-500']),
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
            'index' => Pages\ListFarms::route('/'),
            'create' => Pages\CreateFarms::route('/create'),
            'view' => Pages\ViewFarms::route('/{record}'),
            'edit' => Pages\EditFarms::route('/{record}/edit'),
        ];
    }
}
