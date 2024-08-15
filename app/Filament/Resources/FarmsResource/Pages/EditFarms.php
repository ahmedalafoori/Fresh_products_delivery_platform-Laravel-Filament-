<?php

namespace App\Filament\Resources\FarmsResource\Pages;

use App\Filament\Resources\FarmsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFarms extends EditRecord
{
    protected static string $resource = FarmsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
