<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Filament\Resources\TestimonialResource\RelationManagers;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function getPluralModelLabel(): string
    {
        return __('messages.dashboard.testimonials');
    }

    public static function getModelLabel(): string
    {
        return __('messages.dashboard.testimonials');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('name_en')
                                    ->label(__('messages.dashboard.name_en'))
                                    ->required(),
                                Forms\Components\TextInput::make('name_ar')
                                    ->label(__('messages.dashboard.name_ar'))
                                    ->required(),
                            ]),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('position_en')
                                    ->label(__('messages.dashboard.position_en')),
                                Forms\Components\TextInput::make('position_ar')
                                    ->label(__('messages.dashboard.position_ar')),
                            ]),
                        Forms\Components\Textarea::make('quote_en')
                            ->label(__('messages.dashboard.quote_en'))
                            ->required(),
                        Forms\Components\Textarea::make('quote_ar')
                            ->label(__('messages.dashboard.quote_ar'))
                            ->required(),
                        Forms\Components\FileUpload::make('image')
                            ->label(__('messages.dashboard.image'))
                            ->image()
                            ->directory('testimonials'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label(__('messages.dashboard.image')),
                Tables\Columns\TextColumn::make('name_ar')
                    ->label(__('messages.dashboard.name_ar'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('position_ar')
                    ->label(__('messages.dashboard.position_ar')),
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }    
}
