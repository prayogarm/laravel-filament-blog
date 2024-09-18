<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Filament\Resources\PortfolioResource\RelationManagers;
use App\Models\Portfolio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Portfolio Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required(),
                Forms\Components\Select::make('kategori_id')
                    ->relationship('kategori', 'name')
                    ->required(),
                Forms\Components\Select::make('designer_id')
                    ->relationship('designer', 'name')
                    ->required(),
                Forms\Components\TextInput::make('type')
                    ->required(),
                Forms\Components\TextInput::make('size')
                    ->required(),
                Forms\Components\TextInput::make('jumlah_ruangan')
                    ->required(),
                Forms\Components\TextInput::make('location')
                    ->required(),
                Forms\Components\FileUpload::make('cover')
                    ->label('Cover Image')
                    ->image()
                    ->directory('images/portfolio-covers')
                    ->required(),
                Forms\Components\FileUpload::make('images')
                    ->label('Portfolio Images')
                    ->multiple()
                    ->image()
                    ->directory('images/portfolio-images')
                    ->maxFiles(10)
                    ->nullable(),
                Forms\Components\FileUpload::make('gambar_hasil')
                    ->label('Gambar Hasil')
                    ->multiple()
                    ->image()
                    ->directory('images/gambar-hasil')
                    ->maxFiles(10)
                    ->nullable(),
                Forms\Components\FileUpload::make('before_after')
                    ->label('Gambar Sebelum & Sesudah')
                    ->multiple()
                    ->image()
                    ->directory('images/gambar-before-after')
                    ->maxFiles(10)
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable(),
                Tables\Columns\TextColumn::make('kategori.name')->label('Kategori')->sortable(),
                Tables\Columns\TextColumn::make('designer.name')->label('Designer')->sortable(),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('size'),
                Tables\Columns\TextColumn::make('location'),
                Tables\Columns\ImageColumn::make('cover'),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
