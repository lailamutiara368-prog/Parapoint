<?php

namespace App\Filament\Resources\PointDetails\Pages;

use App\Filament\Resources\PointDetails\PointDetailResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPointDetails extends ListRecords
{
    protected static string $resource = PointDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
