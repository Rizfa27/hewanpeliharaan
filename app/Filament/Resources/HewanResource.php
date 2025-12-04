<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HewanResource\Pages;
use App\Models\Hewan;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;

class HewanResource extends Resource
{
    protected static ?string $model = Hewan::class;

    protected static ?string $navigationIcon = 'heroicon-o-bug-ant';
    protected static ?string $navigationGroup = 'Master Data';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama_hewan')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('umur')
                ->numeric()
                ->nullable()
                ->label('Umur (tahun)'),

            Forms\Components\Select::make('jenis_id')
                ->relationship('jenis', 'nama_jenis')
                ->label('Jenis Hewan')
                ->required()
                ->searchable(),

            Forms\Components\Select::make('pemilik_id')
                ->relationship('pemilik', 'nama_pemilik')
                ->label('Pemilik')
                ->required()
                ->searchable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_hewan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jenis.nama_jenis')->label('Jenis Hewan')->sortable(),
                Tables\Columns\TextColumn::make('pemilik.nama_pemilik')->label('Pemilik')->sortable(),
                Tables\Columns\TextColumn::make('umur')->label('Umur'),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHewans::route('/'),
            'create' => Pages\CreateHewan::route('/create'),
            'edit' => Pages\EditHewan::route('/{record}/edit'),
        ];
    }
}
