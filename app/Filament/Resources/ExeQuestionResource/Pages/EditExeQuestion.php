<?php

namespace App\Filament\Resources\ExeQuestionResource\Pages;

use App\Filament\Resources\ExeQuestionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExeQuestion extends EditRecord
{
    protected static string $resource = ExeQuestionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
