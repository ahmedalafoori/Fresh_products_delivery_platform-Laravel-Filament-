<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductsResource\Pages;
use App\Filament\Resources\ProductsResource\RelationManagers;
use App\Models\Categories;
use App\Models\Farms;
use App\Models\Products;
use App\Models\Seasons;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('prais')
                    ->numeric(),
                Forms\Components\TextInput::make('quantity')
                    ->required()
                    ->numeric(),
                    Forms\Components\FileUpload::make('photo')
                    ->required()
                    ->image() // يمكن تحديد نوع الصورة
                    ->maxSize(1024) // الحجم الأقصى للصورة (بالميغابايت)
                    ->directory('photos') // تحديد مجلد لتخزين الصور
                    ->required()
                    ->maxSize(1024) // الحجم الأقصى للملف (بالميغابايت)
                    ->disk('public'), // أو أي محرك تخزين تختاره
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Select::make('category_id')
                    ->label('Category')
                    ->required()
                    ->options(
                        Categories::all()->pluck('name', 'id')->toArray()
                    )
                    ->placeholder('Select a category')
                    ->searchable(false), // تعطيل خاصية البحث
                Select::make('season_id')
                    ->label('Season')
                    ->required()
                    ->options(
                        Seasons::all()->pluck('seasonsname', 'id')->toArray()
                    )
                    ->placeholder('Select a season')
                    ->searchable(false), // تعطيل خاصية البحث
                Select::make('farm_id')
                    ->label('Farm')
                    ->required()
                    ->options(
                        Farms::all()->pluck('name', 'id')->toArray()
                    )
                    ->placeholder('Select a farm')
                    ->searchable(false), // تعطيل خاصية البحث
                Forms\Components\DatePicker::make('data')
                    ->required(),
                Forms\Components\Toggle::make('productstatus')
                    ->required(),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('prais')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('quantity')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\ImageColumn::make('photo')
                    ->label('Photo')
                    ->sortable()
                    ->circular(), // لجعل الصورة دائرية إذا رغبت
                Tables\Columns\TextColumn::make('category.name') // عرض اسم الفئة
                    ->label('Category')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('season.seasonsname') // عرض اسم الموسم
                    ->label('Season')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('farm.name') // عرض اسم المزرعة
                    ->label('Farm')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('data')
                    ->date()
                    ->sortable(),
                Tables\Columns\IconColumn::make('productstatus')
                    ->boolean(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProducts::route('/create'),
            'view' => Pages\ViewProducts::route('/{record}'),
            'edit' => Pages\EditProducts::route('/{record}/edit'),
        ];
    }
}
