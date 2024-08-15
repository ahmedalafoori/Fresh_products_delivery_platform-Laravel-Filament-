<?php

namespace App\Filament\Resources\DeliveryDetailsResource\Pages;

use App\Filament\Resources\DeliveryDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDeliveryDetails extends EditRecord
{
    protected static string $resource = DeliveryDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
