<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('title')
                    ->required(),
                Forms\Components\RichEditor::make('our_people')
                    ->required(),
                Forms\Components\RichEditor::make('standards_of_care')
                    ->required(),
                Forms\Components\RichEditor::make('small_text')
                    ->required(),
                Forms\Components\RichEditor::make('our_mission')
                    ->required(),
                Forms\Components\RichEditor::make('our_values')
                    ->required(),
                Forms\Components\RichEditor::make('our_services')
                    ->required(),
                Forms\Components\RichEditor::make('our_relationship_first_approach')
                    ->required(),
                Forms\Components\RichEditor::make('contact_us')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('our_people')
                    ->searchable(),
                Tables\Columns\TextColumn::make('standards_of_care')
                    ->searchable(),
                Tables\Columns\TextColumn::make('small_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('our_mission')
                    ->searchable(),
                Tables\Columns\TextColumn::make('our_values')
                    ->searchable(),
                Tables\Columns\TextColumn::make('our_services')
                    ->searchable(),
                Tables\Columns\TextColumn::make('our_relationship_first_approach')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact_us')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'view' => Pages\ViewAbout::route('/{record}'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
