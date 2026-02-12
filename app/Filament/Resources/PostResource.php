<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function getPluralModelLabel(): string
    {
        return __('messages.dashboard.posts');
    }

    public static function getModelLabel(): string
    {
        return __('messages.dashboard.posts');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('title_en')
                                    ->label(__('messages.dashboard.title_en'))
                                    ->required()
                                    ->reactive()
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', \Illuminate\Support\Str::slug($state))),
                                Forms\Components\TextInput::make('title_ar')
                                    ->label(__('messages.dashboard.title_ar'))
                                    ->required(),
                            ]),
                        Forms\Components\TextInput::make('slug')
                            ->label(__('messages.dashboard.slug'))
                            ->required()
                            ->unique(ignoreRecord: true),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\Textarea::make('excerpt_en')
                                    ->label(__('messages.dashboard.excerpt_en')),
                                Forms\Components\Textarea::make('excerpt_ar')
                                    ->label(__('messages.dashboard.excerpt_ar')),
                            ]),
                        Forms\Components\RichEditor::make('content_en')
                            ->label(__('messages.dashboard.content_en')),
                        Forms\Components\RichEditor::make('content_ar')
                            ->label(__('messages.dashboard.content_ar')),
                        Forms\Components\FileUpload::make('image')
                            ->label(__('messages.dashboard.image'))
                            ->image()
                            ->directory('posts'),
                        Forms\Components\DateTimePicker::make('published_at')
                            ->label(__('messages.dashboard.published_at')),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label(__('messages.dashboard.image')),
                Tables\Columns\TextColumn::make('title_ar')
                    ->label(__('messages.dashboard.title_ar'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('title_en')
                    ->label(__('messages.dashboard.title_en'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->label(__('messages.dashboard.published_at'))
                    ->dateTime(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }    
}
