<?php

$files = glob(__DIR__ . '/app/Filament/Resources/*.php');
foreach ($files as $file) {
    if (!is_file($file)) continue;
    $content = file_get_contents($file);
    $content = str_replace(
        ['use Filament\Resources\Form;', 'use Filament\Resources\Table;', 'Forms\Components\Card::make()', 'use Filament\Pages\Actions', 'Tables\Columns\ImageColumn\ImageColumn'],
        ['use Filament\Forms\Form;', 'use Filament\Tables\Table;', 'Forms\Components\Section::make()', 'use Filament\Actions', 'Tables\Columns\ImageColumn'],
        $content
    );
    file_put_contents($file, $content);
}

$pages = glob(__DIR__ . '/app/Filament/Resources/*/Pages/*.php');
foreach ($pages as $file) {
    if (!is_file($file)) continue;
    $content = file_get_contents($file);
    $content = str_replace(
        ['use Filament\Pages\Actions;', 'Actions\DeleteAction::make()', 'Actions\EditAction::make()', 'Actions\CreateAction::make()'],
        ['use Filament\Actions;', 'Actions\DeleteAction::make()', 'Actions\EditAction::make()', 'Actions\CreateAction::make()'],
        $content
    );
    file_put_contents($file, $content);
}

echo "Migrated\n";
