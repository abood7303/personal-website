<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function getPluralModelLabel(): string
    {
        return __('messages.dashboard.services');
    }

    public static function getModelLabel(): string
    {
        return __('messages.dashboard.services');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('title_en')->required()->label(__('messages.dashboard.title_en')),
                        Forms\Components\TextInput::make('title_ar')->required()->label(__('messages.dashboard.title_ar')),
                        Forms\Components\Textarea::make('description_en')->label(__('messages.dashboard.description_en')),
                        Forms\Components\Textarea::make('description_ar')->label(__('messages.dashboard.description_ar')),
                        Forms\Components\TextInput::make('icon')->label(__('messages.dashboard.icon')),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_en')->label(__('messages.dashboard.title_en'))->searchable(),
                Tables\Columns\TextColumn::make('title_ar')->label(__('messages.dashboard.title_ar'))->searchable(),
                Tables\Columns\TextColumn::make('created_at')->label(__('messages.dashboard.created_at'))->dateTime(),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }    
}
