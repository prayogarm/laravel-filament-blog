<?php

namespace App\Filament\Resources\HandleClientResource\Pages;

use App\Filament\Resources\HandleClientResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Client;
use App\Models\Project;

class CreateHandleClient extends CreateRecord
{
    protected static string $resource = HandleClientResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $clientId = $data['client_id'];
        $projectId = $data['project_id'];

        if (!$clientId) {
            $client = Client::create([
                'name' => $data['client_name'],
                'address' => $data['client_address'],
                'phone' => $data['client_phone'],
                'source' => $data['client_source'],
            ]);
            $clientId = $client->id;
        }

        if (!$projectId) {
            $project = Project::create([
                'client_id' => $clientId,
                'name' => $data['project_name'],
            ]);
            $projectId = $project->id;
        }

        $data['project_id'] = $projectId;
        unset($data['client_id'], $data['client_name'], $data['client_address'], $data['client_phone'], $data['client_source'], $data['project_name']);

        return $data;
    }
}
