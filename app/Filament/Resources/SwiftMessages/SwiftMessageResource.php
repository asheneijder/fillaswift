<?php

namespace App\Filament\Resources\SwiftMessages;

use App\Filament\Resources\SwiftMessages\Pages\CreateSwiftMessage;
use App\Filament\Resources\SwiftMessages\Pages\EditSwiftMessage;
use App\Filament\Resources\SwiftMessages\Pages\ListSwiftMessages;
use App\Filament\Resources\SwiftMessages\Schemas\SwiftMessageForm;
use App\Filament\Resources\SwiftMessages\Tables\SwiftMessagesTable;
use App\Models\SwiftMessage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SwiftMessageResource extends Resource
{
    protected static ?string $model = SwiftMessage::class;

    // protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'Swift Messages';

    public static function form(Schema $schema): Schema
    {
        return SwiftMessageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SwiftMessagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSwiftMessages::route('/'),
            'create' => CreateSwiftMessage::route('/create'),
            'edit' => EditSwiftMessage::route('/{record}/edit'),
        ];
    }
}
