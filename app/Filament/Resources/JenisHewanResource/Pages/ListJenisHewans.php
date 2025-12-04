<?php

namespace App\Filament\Resources\JenisHewanResource\Pages;

use App\Filament\Resources\JenisHewanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisHewans extends ListRecords
{
    protected static string $resource = JenisHewanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
