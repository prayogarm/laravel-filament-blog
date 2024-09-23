<?php

namespace App\Filament\Resources\HandleClientResource\Pages;

use App\Filament\Resources\HandleClientResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHandleClients extends ListRecords
{
    protected static string $resource = HandleClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
