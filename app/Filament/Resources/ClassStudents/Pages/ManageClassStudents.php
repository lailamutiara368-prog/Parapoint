<?php

namespace App\Filament\Resources\ClassStudents\Pages;

use App\Filament\Resources\ClassStudents\ClassStudentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageClassStudents extends ManageRecords
{
    protected static string $resource = ClassStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
