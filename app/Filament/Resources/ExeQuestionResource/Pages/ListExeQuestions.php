<?php

namespace App\Filament\Resources\ExeQuestionResource\Pages;

use App\Filament\Resources\ExeQuestionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExeQuestions extends ListRecords
{
    protected static string $resource = ExeQuestionResource::class;

    protected static ?string $title = 'Exercise Questions';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
