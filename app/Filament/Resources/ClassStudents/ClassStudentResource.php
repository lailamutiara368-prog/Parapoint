<?php

namespace App\Filament\Resources\ClassStudents;

use App\Filament\Resources\ClassStudents\Pages\CreateClassStudent;
use App\Filament\Resources\ClassStudents\Pages\EditClassStudent;
use App\Filament\Resources\ClassStudents\Pages\ListClassStudents;
use App\Filament\Resources\ClassStudents\Pages\ViewClassStudent;
use App\Filament\Resources\ClassStudents\Schemas\ClassStudentForm;
use App\Filament\Resources\ClassStudents\Schemas\ClassStudentInfolist;
use App\Filament\Resources\ClassStudents\Tables\ClassStudentsTable;
use App\Models\ClassStudent;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ClassStudentResource extends Resource
{
    protected static ?string $model = ClassStudent::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ClassStudentForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ClassStudentInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ClassStudentsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListClassStudents::route('/'),
            'create' => CreateClassStudent::route('/create'),
            'view' => ViewClassStudent::route('/{record}'),
            'edit' => EditClassStudent::route('/{record}/edit'),
        ];
    }
}
