<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HandleClientResource\Pages;
use App\Filament\Resources\HandleClientResource\RelationManagers;
use App\Models\Client;
use App\Models\HandleClient;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HandleClientResource extends Resource
{
    protected static ?string $model = HandleClient::class;

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
                                TextInput::make('project')
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
                    ]),
                Forms\Components\Select::make('status_follow_up')
                    ->options([
                        'pending' => 'Pending',
                        'in_progress' => 'In Progress',
                        'completed' => 'Completed',
                    ]),
                Forms\Components\DatePicker::make('follow_up_1'),
                Forms\Components\DatePicker::make('follow_up_2'),
                Forms\Components\DatePicker::make('follow_up_3'),
                Forms\Components\DatePicker::make('follow_up_4'),
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
                Tables\Columns\TextColumn::make('status_follow_up'),
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
            'index' => Pages\ListHandleClients::route('/'),
            'create' => Pages\CreateHandleClient::route('/create'),
            'edit' => Pages\EditHandleClient::route('/{record}/edit'),
        ];
    }
}
