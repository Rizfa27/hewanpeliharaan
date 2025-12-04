<?php

namespace App\Filament\Resources\JenisHewanResource\Pages;

use App\Filament\Resources\JenisHewanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisHewan extends EditRecord
{
    protected static string $resource = JenisHewanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
