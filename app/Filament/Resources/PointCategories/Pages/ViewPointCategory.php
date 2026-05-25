<?php

namespace App\Filament\Resources\PointCategories\Pages;

use App\Filament\Resources\PointCategories\PointCategoryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPointCategory extends ViewRecord
{
    protected static string $resource = PointCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
