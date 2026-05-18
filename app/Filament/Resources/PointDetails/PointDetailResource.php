<?php

namespace App\Filament\Resources\PointDetails;

use App\Filament\Resources\PointDetails\Pages\CreatePointDetail;
use App\Filament\Resources\PointDetails\Pages\EditPointDetail;
use App\Filament\Resources\PointDetails\Pages\ListPointDetails;
use App\Filament\Resources\PointDetails\Schemas\PointDetailForm;
use App\Filament\Resources\PointDetails\Tables\PointDetailsTable;
use App\Models\PointDetail;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PointDetailResource extends Resource
{
    protected static ?string $model = PointDetail::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PointDetailForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PointDetailsTable::configure($table);
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
            'index' => ListPointDetails::route('/'),
            'create' => CreatePointDetail::route('/create'),
            'edit' => EditPointDetail::route('/{record}/edit'),
        ];
    }
}
