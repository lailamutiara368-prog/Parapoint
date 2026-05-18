<?php

namespace App\Filament\Resources\PointCategories\Pages;

use App\Filament\Resources\PointCategories\PointCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPointCategory extends EditRecord
{
    protected static string $resource = PointCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
