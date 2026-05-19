<?php

namespace App\Filament\Resources\PointDetails\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PointDetailInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('student_id')
                    ->numeric(),
                TextEntry::make('teacher_id')
                    ->numeric(),
                TextEntry::make('category_id')
                    ->numeric(),
                TextEntry::make('initial_point')
                    ->numeric(),
                TextEntry::make('remaining_point')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
