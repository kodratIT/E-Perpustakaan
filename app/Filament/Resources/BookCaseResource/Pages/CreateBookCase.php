<?php

namespace App\Filament\Resources\BookCaseResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\BookCaseResource;

class CreateBookCase extends CreateRecord
{
    protected static string $resource = BookCaseResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Book Case Created')
            ->body('The Book Case has been created successfully.');
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
