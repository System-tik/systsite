<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SousResource\Pages;
use App\Filament\Resources\SousResource\RelationManagers;
use App\Models\Sous;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SousResource extends Resource
{
    protected static ?string $model = Sous::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Card::make()->schema([
                    TextInput::make("nom")->required(),
                    RichEditor::make('description')->required(),
                    TextInput::make('prix_start')->required()->type('number'),
                    Forms\Components\Select::make('service_id')->relationship('service', 'titre'),
                    SpatieMediaLibraryFileUpload::make("sous")->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make("id")->sortable(),
                TextColumn::make("nom"),
                TextColumn::make("description"),
                TextColumn::make("prix_start"),
                TextColumn::make("service.titre"),
                SpatieMediaLibraryImageColumn::make('sous')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListSouses::route('/'),
            'create' => Pages\CreateSous::route('/create'),
            'edit' => Pages\EditSous::route('/{record}/edit'),
        ];
    }
}
