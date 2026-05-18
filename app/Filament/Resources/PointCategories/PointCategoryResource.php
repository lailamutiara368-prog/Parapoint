<?php

namespace App\Filament\Resources\PointCategories;

use App\Filament\Resources\PointCategories\Pages\CreatePointCategory;
use App\Filament\Resources\PointCategories\Pages\EditPointCategory;
use App\Filament\Resources\PointCategories\Pages\ListPointCategories;
use App\Filament\Resources\PointCategories\Schemas\PointCategoryForm;
use App\Filament\Resources\PointCategories\Tables\PointCategoriesTable;
use App\Models\PointCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PointCategoryResource extends Resource
{
    protected static ?string $model = PointCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PointCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PointCategoriesTable::configure($table);
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
            'index' => ListPointCategories::route('/'),
            'create' => CreatePointCategory::route('/create'),
            'edit' => EditPointCategory::route('/{record}/edit'),
        ];
    }
}
