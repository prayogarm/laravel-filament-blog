<?php

namespace App\Filament\Resources\HandleClientResource\Pages;

use App\Filament\Resources\HandleClientResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHandleClient extends EditRecord
{
    protected static string $resource = HandleClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
