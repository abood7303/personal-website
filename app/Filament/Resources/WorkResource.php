<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkResource\Pages;
use App\Filament\Resources\WorkResource\RelationManagers;
use App\Models\Work;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkResource extends Resource
{
    protected static ?string $model = Work::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getPluralModelLabel(): string
    {
        return __('messages.dashboard.works');
    }

    public static function getModelLabel(): string
    {
        return __('messages.dashboard.works');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('title_en')
                            ->label(__('messages.dashboard.title_en'))
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', \Illuminate\Support\Str::slug($state))),
                        Forms\Components\TextInput::make('title_ar')
                            ->label(__('messages.dashboard.title_ar'))
                            ->required(),
                        Forms\Components\TextInput::make('slug')
                            ->label(__('messages.dashboard.slug'))
                            ->required()->unique(ignoreRecord: true),
                        Forms\Components\TextInput::make('category_en')
                            ->label(__('messages.dashboard.category_en')),
                        Forms\Components\TextInput::make('category_ar')
                            ->label(__('messages.dashboard.category_ar')),
                        Forms\Components\RichEditor::make('content_en')
                            ->label(__('messages.dashboard.content_en')),
                        Forms\Components\RichEditor::make('content_ar')
                            ->label(__('messages.dashboard.content_ar')),
                        Forms\Components\FileUpload::make('image')
                            ->label(__('messages.dashboard.image'))
                            ->image()->directory('works'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label(__('messages.dashboard.image')),
                Tables\Columns\TextColumn::make('title_en')
                    ->label(__('messages.dashboard.title_en'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('category_en')
                    ->label(__('messages.dashboard.category_en')),
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
            'index' => Pages\ListWorks::route('/'),
            'create' => Pages\CreateWork::route('/create'),
            'edit' => Pages\EditWork::route('/{record}/edit'),
        ];
    }    
}
