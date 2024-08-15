<?php

namespace App\Filament\Resources\DeliveryDetailsResource\Pages;

use App\Filament\Resources\DeliveryDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDeliveryDetails extends ViewRecord
{
    protected static string $resource = DeliveryDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
