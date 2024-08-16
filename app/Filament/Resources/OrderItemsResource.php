<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderItemsResource\Pages;
use App\Models\OrderItems;
use App\Models\Products;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class OrderItemsResource extends Resource
{
    protected static ?string $model = OrderItems::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('product_id')
                    ->label('Product Name')
                    ->options(Products::all()->pluck('name', 'id'))  // جلب أسماء المنتجات مع معرفاتها
                    ->required(),

                Forms\Components\Select::make('user_id')
                    ->label('User Name')
                    ->options(User::all()->pluck('name', 'id'))  // جلب أسماء المستخدمين مع معرفاتهم
                    ->required(),

                Forms\Components\TextInput::make('order_id')  // حقل Order ID
                    ->numeric()
                    ->required(),

                Forms\Components\TextInput::make('quantity')
                    ->required()
                    ->numeric()
                    ->default(0),

                Forms\Components\TextInput::make('total_product_price')
                    ->required()
                    ->numeric(),

                Forms\Components\DateTimePicker::make('order_delivery_time'),

                Forms\Components\Toggle::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product.name')  // عرض اسم المنتج بدلاً من معرف المنتج
                    ->label('Product Name')
                    ->sortable(),

                Tables\Columns\TextColumn::make('order_id')  // عمود Order ID
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('user.name')  // عرض اسم المستخدم بدلاً من معرف المستخدم
                    ->label('User Name')
                    ->sortable(),

                Tables\Columns\TextColumn::make('quantity')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('total_product_price')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('order_delivery_time')
                    ->dateTime()
                    ->sortable(),

                Tables\Columns\IconColumn::make('status')
                    ->boolean(),

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
            'index' => Pages\ListOrderItems::route('/'),
            'create' => Pages\CreateOrderItems::route('/create'),
            'view' => Pages\ViewOrderItems::route('/{record}'),
            'edit' => Pages\EditOrderItems::route('/{record}/edit'),
        ];
    }
}
