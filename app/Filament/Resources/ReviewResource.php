<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Filament\Resources\ReviewResource\RelationManagers;
use App\Models\Products;
use App\Models\Review;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('product_id')
                    ->label('Product')
                    ->options(Products::pluck('name', 'id')->toArray()) // جلب أسماء المنتجات من جدول `products`
                    ->required(),

                Forms\Components\Select::make('user_id')
                    ->label('User')
                    ->options(User::pluck('name', 'id')->toArray()) // جلب أسماء المستخدمين من جدول `users`
                    ->required(),

                    Forms\Components\TextInput::make('rating')
                    ->label('Rating')
                    ->required()
                    ->numeric() // التأكد من أن الإدخال هو رقم
                    ->minValue(1) // الحد الأدنى للقيمة
                    ->maxValue(5) // الحد الأقصى للقيمة
                    ->default(1), // القيمة الافتراضية


                Forms\Components\Textarea::make('comment')
                    ->label('Comment')
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product_id')
                    ->label('Product') // عنوان العمود
                    ->formatStateUsing(fn ($state) => Products::find($state)?->name) // جلب اسم المنتج بناءً على ID
                    ->sortable(),

                Tables\Columns\TextColumn::make('user_id')
                    ->label('User') // عنوان العمود
                    ->formatStateUsing(fn ($state) => User::find($state)?->name) // جلب اسم المستخدم بناءً على ID
                    ->sortable(),

                Tables\Columns\TextColumn::make('rating')
                    ->label('Rating') // عنوان العمود
                    ->formatStateUsing(fn ($state) => str_repeat('⭐', $state)) // عرض النجوم بناءً على القيمة
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'view' => Pages\ViewReview::route('/{record}'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}
