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
                    ->label('Student')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('teacher.teacher_name')
                    ->label('Teacher')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('point_category.description')
                    ->label('Category')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('initial_point')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('remaining_point')
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
