<?php

namespace App\Filament\Resources\PointDetails\Pages;

use App\Filament\Resources\PointDetails\PointDetailResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPointDetail extends ViewRecord
{
    protected static string $resource = PointDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
