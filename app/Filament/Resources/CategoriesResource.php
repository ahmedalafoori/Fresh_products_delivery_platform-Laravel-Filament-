<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoriesResource\Pages;
use App\Filament\Resources\CategoriesResource\RelationManagers;
use App\Models\Categories;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoriesResource extends Resource
{
    protected static ?string $model = Categories::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Category Name')
                    ->placeholder('Enter category name')
                    ->helperText('The name of the category'),

                Forms\Components\TextInput::make('describtion')
                    ->maxLength(255)
                    ->label('Description')
                    ->placeholder('Enter category description')
                    ->helperText('A brief description of the category'),

                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->label('Category Image')
                    ->helperText('Upload an image representing the category'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Category Name')
                    ->searchable()
                    ->sortable()
                    ->extraAttributes(['class' => 'whitespace-nowrap']),

                Tables\Columns\TextColumn::make('describtion')
                    ->label('Description')
                    ->searchable()
                    ->sortable()
                    ->extraAttributes(['class' => 'whitespace-nowrap']),

                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->size(50)
                    ->extraAttributes(['class' => 'w-20 h-20 object-cover']),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->extraAttributes(['class' => 'whitespace-nowrap']),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->extraAttributes(['class' => 'whitespace-nowrap']),
            ])
            ->filters([
                // Define any filters here if needed
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategories::route('/create'),
            'view' => Pages\ViewCategories::route('/{record}'),
            'edit' => Pages\EditCategories::route('/{record}/edit'),
        ];
    }
}
