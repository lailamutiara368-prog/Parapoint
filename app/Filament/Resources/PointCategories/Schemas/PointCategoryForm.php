<?php

namespace App\Filament\Resources\PointCategories\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use PhpParser\Node\Stmt\Label;

class PointCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('point_category_name')
                    ->label('Nama Kategori')
                    ->options([
                        'add' => 'Prestasi', 
                        'subtract' => 'Pelanggaran'])
                    ->required()
                    ->live()
                    ->afterStateUpdated(function ($state, Set $set, Get $get) {
                        $amount = abs((int) $get('amount')); 
    
                        if ($amount) {$set('amount', $state === 'subtract' ? -$amount : $amount);
                            }
                        }),

                TextInput::make('amount')
                    ->required()
                    ->live(onBlur: true) 
                    ->afterStateUpdated(function ($state, Set $set, Get $get) {
                        $amount = abs((int) $state);
        
                        if ($amount) { $set('amount', $get('point_category_name') === 'subtract' ? -$amount : $amount);
                        }
                    })
                    ->label('Nilai Poin'),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
