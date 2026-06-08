<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('class_student_id')
                    ->relationship('class_student', 'class_student_name')
                    ->label('Class')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('nis')
                    ->label('NIS')
                    ->required()
                    ->numeric()
                    ->unique(table: 'students', ignoreRecord: true) 
                    ->validationMessages([
                        'unique' => 'NIS ini udah terdaftar!',
                    ]),
                TextInput::make('current_point')
                    ->label('Current Point')
                    ->numeric()
                    ->default(150)
                    ->required(),
            ]);
    }
}
