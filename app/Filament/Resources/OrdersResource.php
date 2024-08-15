<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrdersResource\Pages;
use App\Filament\Resources\OrdersResource\RelationManagers;
use App\Models\Orders;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrdersResource extends Resource
{
    protected static ?string $model = Orders::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('User ID')
                    ->options(function () {
                        return \App\Models\User::pluck('name', 'id')->toArray();
                    })
                    ->required(),

                Forms\Components\Select::make('address_id')
                    ->label('Address ID')
                    ->options(function () {
                        return \App\Models\Addresses::pluck('name', 'id')->toArray();
                    })
                    ->required(),

                Forms\Components\Select::make('delivery_details')
                    ->label('Delivery ID')
                    ->options(function () {
                        return \App\Models\DeliveryDetails::pluck('vehiclenumber', 'usar_id')->toArray();
                    }),

                    Forms\Components\DateTimePicker::make('orderdelivrytime')
                    ->required()
                    ->label('Delivery Time'),

                    Forms\Components\TextInput::make('deliverycost')
                    ->required()
                    ->numeric()
                    ->label('Delivery Cost')
                    ->hint('Enter amount in Yemeni Rials (YER)')
                    ->afterStateUpdated(function ($state, $component) {
                        // Format the input value with the currency symbol
                        $component->state = number_format($state, 2, '.', ',') . ' YER';
                    }),

                    Forms\Components\TextInput::make('totalorderprice')
                    ->required()
                    ->numeric()
                    ->label('Total Order Price')
                    ->hint('Enter amount in Yemeni Rials (YER)')
                    ->afterStateUpdated(function ($state, $component) {
                        // Format the input value with the currency symbol
                        $component->state = number_format($state, 2, '.', ',') . ' YER';
                    }),

                Forms\Components\Select::make('orderstatas')
                    ->label('Order Status')
                    ->options([
                        'Pending' => 'Pending',
                        'Completed' => 'Completed',
                        'Canceled' => 'Canceled',
                    ]),

                Forms\Components\Select::make('paymentmethod')
                    ->label('Payment Method')
                    ->options([
                        'Credit Card' => 'Credit Card',
                        'PayPal' => 'PayPal',
                        'Cash' => 'Cash',
                    ]),
            ]);
    }



    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Display the name of the related user
                Tables\Columns\TextColumn::make('user.name')
                    ->label('User Name') // Label for clarity
                    ->sortable(),

                // Display the name of the related address
                Tables\Columns\TextColumn::make('address.name')
                    ->label('Address Name') // Label for clarity
                    ->sortable(),

                // Display the name of the related delivery
                Tables\Columns\TextColumn::make('delivery.vehiclenumber')
                    ->label('Delivery Name') // Label for clarity
                    ->sortable(),

                Tables\Columns\TextColumn::make('orderdelivrytime')
                    ->label('Order Delivery Time'), // Label for clarity

                Tables\Columns\TextColumn::make('deliverycost')
                    ->numeric()
                    ->label('Delivery Cost')
                    ->sortable(),

                Tables\Columns\TextColumn::make('totalorderprice')
                    ->numeric()
                    ->label('Total Order Price')
                    ->sortable(),

                Tables\Columns\TextColumn::make('orderstatas')
                    ->label('Order Status') // Label for clarity
                    ->searchable(),

                Tables\Columns\TextColumn::make('paymentmethod')
                    ->label('Payment Method') // Label for clarity
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Created At')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->label('Updated At')
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrders::route('/create'),
            'view' => Pages\ViewOrders::route('/{record}'),
            'edit' => Pages\EditOrders::route('/{record}/edit'),
        ];
    }
}
