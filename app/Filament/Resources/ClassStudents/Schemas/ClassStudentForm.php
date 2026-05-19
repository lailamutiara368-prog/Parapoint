<?php

namespace App\Filament\Resources\ClassStudents\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ClassStudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('class_student_name')
                    ->required(),
            ]);
    }
}
