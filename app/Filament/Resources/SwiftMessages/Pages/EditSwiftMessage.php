<?php

namespace App\Filament\Resources\SwiftMessages\Pages;

use App\Filament\Resources\SwiftMessages\SwiftMessageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSwiftMessage extends EditRecord
{
    protected static string $resource = SwiftMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
