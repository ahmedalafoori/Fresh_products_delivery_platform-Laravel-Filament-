<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeasonsResource\Pages;
use App\Filament\Resources\SeasonsResource\RelationManagers;
use App\Models\Seasons;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SeasonsResource extends Resource
{
    protected static ?string $model = Seasons::class;

    protected static ?string $navigationIcon = 'heroicon-o-sun';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('seasonsname')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('startdaet')
                    ->required(),
                Forms\Components\DatePicker::make('enddate')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('seasonsname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('startdaet')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('enddate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSeasons::route('/'),
            'create' => Pages\CreateSeasons::route('/create'),
            'view' => Pages\ViewSeasons::route('/{record}'),
            'edit' => Pages\EditSeasons::route('/{record}/edit'),
        ];
    }
}
