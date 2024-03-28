<?php

namespace App\Filament\Resources\BookCaseResource\Pages;

use App\Filament\Resources\BookCaseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBookCases extends ListRecords
{
    protected static string $resource = BookCaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
