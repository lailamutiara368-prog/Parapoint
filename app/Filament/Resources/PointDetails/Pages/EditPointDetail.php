<?php

namespace App\Filament\Resources\PointDetails\Pages;

use App\Filament\Resources\PointDetails\PointDetailResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPointDetail extends EditRecord
{
    protected static string $resource = PointDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
