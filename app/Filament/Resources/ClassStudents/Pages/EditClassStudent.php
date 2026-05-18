<?php

namespace App\Filament\Resources\ClassStudents\Pages;

use App\Filament\Resources\ClassStudents\ClassStudentResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditClassStudent extends EditRecord
{
    protected static string $resource = ClassStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
