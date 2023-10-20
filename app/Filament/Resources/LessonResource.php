<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LessonResource\Pages;
use App\Filament\Resources\LessonResource\RelationManagers;
use App\Models\Lesson;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Grouping\Group;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LessonResource extends Resource
{
    protected static ?string $model = Lesson::class;

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'Course Content';

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('course_skill_title_id')
                    ->relationship('courseSkillTitle', 'id'),
                Forms\Components\TextInput::make('lesson_title')
                    ->required()
                    ->maxLength(100),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->groups([
                Group::make('courseSkillTitle.course_title')
                    ->collapsible()
                    ->titlePrefixedWithLabel(false),
                Group::make('lesson_title')
                    ->collapsible()
                    ->titlePrefixedWithLabel(false),
            ])->defaultGroup('courseSkillTitle.course_title')
            ->columns([
                Tables\Columns\TextColumn::make('courseSkillTitle.course_title')
                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('lesson_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('videos.video_title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('activities.activity_title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('exercises.exercise_title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('summativeAssesments.summative_assesment_title')
                    ->searchable()
                    ->sortable(),
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
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListLessons::route('/'),
            'create' => Pages\CreateLesson::route('/create'),
            'edit' => Pages\EditLesson::route('/{record}/edit'),
        ];
    }
}