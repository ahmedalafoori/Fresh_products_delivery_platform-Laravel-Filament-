<?php

namespace App\Filament\Resources\DeliveryDetailsResource\Pages;

use App\Filament\Resources\DeliveryDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDeliveryDetails extends ListRecords
{
    protected static string $resource = DeliveryDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
