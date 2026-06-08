<?php

namespace App\Filament\Resources\PointDetails\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

use App\Models\PointCategory;

class PointDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('student_id')
                    ->relationship('student', 'name') 
                    ->required()
                    ->label('Nama Siswa'),

                Select::make('teacher_id')
                    ->relationship('teacher', 'teacher_name') 
                    ->required()
                    ->label('Nama Guru'),

                    
                    
                Select::make('category_id')
                    ->relationship('point_category', 'description') 
                    ->required()
                    ->live()
                    ->preload()
                    ->label('Kategori')
                    ->afterStateUpdated(function ($state, $set, $get) {
                        $category = PointCategory::find($state);
        
                        if ($category) {
                            $set('amount', $category->amount);
            
                            $occurrent = $get('occurrent_number') ?? 1;
                            $poin = (int) $category->amount * (int) $occurrent;
            
                            $set('counted_point', $category->point_category_name === 'subtract' ? -abs($poin) : abs($poin));
                        }
                    }),

                TextInput::make('occurrent_number')
                    ->label('Occurrent Number')
                    ->numeric()
                    ->required()
                    ->live()
                    ->default(1)
                    ->afterStateUpdated(function ($state, $set, $get) {
                        $category = PointCategory::find($get('category_id'));
        
                        if ($category && $state) {
            
                            $poin = (int) $get('amount') * (int) $state;
            
                            $set('counted_point', $category->point_category_name === 'subtract' ? -abs($poin) : abs($poin));
                            } else {
                            $set('counted_point', null);
                            }
                        })
                        ->label('Jumlah Kejadian'),

                TextInput::make('amount')
                    ->label('Nilai Poin')
                    ->required()
                    ->readOnly()
                    ->dehydrated(),

                TextInput::make('counted_point')
                    ->label('Total Poin')
                    ->required()
                    ->readOnly()
                    ->dehydrated(),

    
            ]);
     }
}
