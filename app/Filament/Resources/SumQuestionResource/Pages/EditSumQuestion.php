<?php

namespace App\Filament\Resources\SumQuestionResource\Pages;

use App\Filament\Resources\SumQuestionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSumQuestion extends EditRecord
{
    protected static string $resource = SumQuestionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
