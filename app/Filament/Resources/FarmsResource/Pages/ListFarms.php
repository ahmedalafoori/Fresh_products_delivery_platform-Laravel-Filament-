<?php

namespace App\Filament\Resources\FarmsResource\Pages;

use App\Filament\Resources\FarmsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFarms extends ListRecords
{
    protected static string $resource = FarmsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
