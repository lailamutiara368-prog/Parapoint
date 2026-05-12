<?php

namespace App\Filament\Resources\PointCategories\Pages;

use App\Filament\Resources\PointCategories\PointCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManagePointCategories extends ManageRecords
{
    protected static string $resource = PointCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
