<?php

namespace App\Filament\Resources\PointDetails\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use PhpParser\Node\Stmt\Label;

class PointDetailsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')
                    ->label('Nama Siswa')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('teacher.teacher_name')
                    ->label('Nama Guru')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('point_category.description')
                    ->label('Deskripsi')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('amount')
                    ->label('Nilai Poin')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('occurrent_number')
                    ->label('Jumlah Kejadian')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('counted_point')
                    ->label('Total Poin')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),

                 ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
