<?php

namespace App\Filament\Resources\AddressesResource\Pages;

use App\Filament\Resources\AddressesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAddresses extends ViewRecord
{
    protected static string $resource = AddressesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
