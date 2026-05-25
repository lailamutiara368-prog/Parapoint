<?php

namespace App\Filament\Resources\ClassStudents\Pages;

use App\Filament\Resources\ClassStudents\ClassStudentResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewClassStudent extends ViewRecord
{
    protected static string $resource = ClassStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
