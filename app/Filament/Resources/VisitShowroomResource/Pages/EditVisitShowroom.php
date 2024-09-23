<?php

namespace App\Filament\Resources\VisitShowroomResource\Pages;

use App\Filament\Resources\VisitShowroomResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVisitShowroom extends EditRecord
{
    protected static string $resource = VisitShowroomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
