<?php

namespace App\Filament\Resources\FarmsResource\Pages;

use App\Filament\Resources\FarmsResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFarms extends ViewRecord
{
    protected static string $resource = FarmsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
