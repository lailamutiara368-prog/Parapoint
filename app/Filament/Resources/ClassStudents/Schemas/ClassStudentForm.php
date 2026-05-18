<?php

namespace App\Filament\Resources\ClassStudents\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ClassStudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('class_id')
                    ->relationship('classstudent', 'class')
                    ->required(),

                TextInput::make('name')
                    ->required(),

                TextInput::make('nis')
                    ->required(),
            ]);
    }
}
