<?php

namespace App\Filament\Resources\SumQuestionResource\Pages;

use App\Filament\Resources\SumQuestionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSumQuestions extends ListRecords
{
    protected static string $resource = SumQuestionResource::class;

    protected static ?string $title = 'Summative Assesment Questions';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
