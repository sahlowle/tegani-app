<?php

namespace App\Filament\Resources\Careers\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CareerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Career Details')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->columnSpan(1),
                                ToggleButtons::make('status')
                                    ->options([
                                        'active' => 'Active',
                                        'inactive' => 'Inactive',
                                    ])
                                    ->colors([
                                        'active' => 'success',
                                        'inactive' => 'danger',
                                    ])
                                    ->icons([
                                        'active' => 'heroicon-o-check-circle',
                                        'inactive' => 'heroicon-o-x-circle',
                                    ])
                                    ->required()
                                    ->default('active')
                                    ->inline(),
                            ]),
                        Textarea::make('description')
                            ->required()
                            ->columnSpanFull(),
                        
                    ]),
            ]);
    }
}
