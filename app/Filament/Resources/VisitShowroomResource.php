<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisitShowroomResource\Pages;
use App\Filament\Resources\VisitShowroomResource\RelationManagers;
use App\Models\Client;
use App\Models\Project;
use App\Models\VisitShowroom;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisitShowroomResource extends Resource
{
    protected static ?string $model = VisitShowroom::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Select::make('client_id')
                            ->label('Client')
                            ->options(Client::pluck('name', 'id'))
                            ->searchable()
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn ($state, callable $set) => $set('project_id', null))
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('address')
                                    ->required(),
                                TextInput::make('city')
                                    ->required(),
                                TextInput::make('phone')
                                    ->tel()
                                    ->required(),
                                Select::make('source')
                                    ->options([
                                        'HIP' => 'HIP',
                                        'KAI' => 'KAI',
                                    ])
                                    ->required(),
                            ])
                            ->createOptionUsing(function (array $data) {
                                return Client::create($data);
                            })
                            ->createOptionAction(function (Forms\Components\Actions\Action $action) {
                                return $action
                                    ->modalHeading('Add New Client')
                                    ->modalButton('Add Client')
                                    ->modalWidth('lg');
                            }),
                        Select::make('project_id')
                            ->label('Project')
                            ->options(function (callable $get) {
                                $clientId = $get('client_id');
                                if (!$clientId) {
                                    return Project::pluck('name', 'id');
                                }
                                return Project::where('client_id', $clientId)->pluck('name', 'id');
                            })
                            ->searchable()
                            ->required()
                            ->reactive()
                            ->createOptionForm([
                                Select::make('client_id')
                                    ->label('Client')
                                    ->options(Client::pluck('name', 'id'))
                                    ->required()
                                    ->reactive(),
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->createOptionUsing(function (array $data) {
                                return Project::create($data);
                            })
                            ->createOptionAction(function (Forms\Components\Actions\Action $action) {
                                return $action
                                    ->modalHeading('Add New Project')
                                    ->modalButton('Add Project')
                                    ->modalWidth('lg');
                            }),
                    ]),
                Forms\Components\Select::make('consultation_status')
                    ->options([
                        'pending' => 'Scheduled',
                        'survey' => 'Completed',
                        'just_asking' => 'Cancelled',
                    ]),
                Forms\Components\TextInput::make('tau_hip_dari'),
                Forms\Components\TextInput::make('rating_maps'),
                Forms\Components\Checkbox::make('booking_fee'),
                Forms\Components\Textarea::make('notes'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('project.client.name')->label('Client'),
                Tables\Columns\TextColumn::make('project.name')->label('Project'),
                Tables\Columns\TextColumn::make('consultation_status'),
                Tables\Columns\BooleanColumn::make('booking_fee'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVisitShowrooms::route('/'),
            'create' => Pages\CreateVisitShowroom::route('/create'),
            'edit' => Pages\EditVisitShowroom::route('/{record}/edit'),
        ];
    }
}
