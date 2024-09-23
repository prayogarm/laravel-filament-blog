<?php

namespace App\Filament\Resources\VisitShowroomResource\Pages;

use App\Filament\Resources\VisitShowroomResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisitShowrooms extends ListRecords
{
    protected static string $resource = VisitShowroomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
