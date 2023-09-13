<?php

namespace Note;

use PHPUnit\Framework\TestCase;
use Domains\Notes\Factories\NoteFactory;
use Domains\Notes\Models\LatinKeyNotation;
use Domains\Notes\Models\Note;
use Domains\Notes\Services\NoteService;

class TestNote extends TestCase
{

    public function testGetChromaticNotes()
    {
        $chromaticNotes = NoteFactory::getChromaticNotes();

        self::assertCount( 12, $chromaticNotes );
        self::assertEquals( "C", $chromaticNotes["C"]->getName() );
        self::assertEquals( "C#", $chromaticNotes["C#"]->getName() );
        self::assertEquals( "D", $chromaticNotes["D"]->getName() );
        self::assertEquals( "D#", $chromaticNotes["D#"]->getName() );
        self::assertEquals( "E", $chromaticNotes["E"]->getName() );
        self::assertEquals( "F", $chromaticNotes["F"]->getName() );
        self::assertEquals( "F#", $chromaticNotes["F#"]->getName() );
        self::assertEquals( "G", $chromaticNotes["G"]->getName() );
        self::assertEquals( "G#", $chromaticNotes["G#"]->getName() );
        self::assertEquals( "A", $chromaticNotes["A"]->getName() );
        self::assertEquals( "A#", $chromaticNotes["A#"]->getName() );
        self::assertEquals( "B", $chromaticNotes["B"]->getName() );
    }

    public function testGetChromaticNotesInLatinNotation()
    {
        $latinKeyNotation = new LatinKeyNotation();

        $chromaticLatinNotes = NoteService::changeKeyNotation( NoteFactory::getChromaticNotes(), $latinKeyNotation );

        self::assertCount( 12, $chromaticLatinNotes );
        self::assertEquals( "DO", $chromaticLatinNotes["C"]->getName() );
        self::assertEquals( "DO#", $chromaticLatinNotes["C#"]->getName() );
        self::assertEquals( "RE", $chromaticLatinNotes["D"]->getName() );
        self::assertEquals( "RE#", $chromaticLatinNotes["D#"]->getName() );
        self::assertEquals( "MI", $chromaticLatinNotes["E"]->getName() );
        self::assertEquals( "FA", $chromaticLatinNotes["F"]->getName() );
        self::assertEquals( "FA#", $chromaticLatinNotes["F#"]->getName() );
        self::assertEquals( "SOL", $chromaticLatinNotes["G"]->getName() );
        self::assertEquals( "SOL#", $chromaticLatinNotes["G#"]->getName() );
        self::assertEquals( "LA", $chromaticLatinNotes["A"]->getName() );
        self::assertEquals( "LA#", $chromaticLatinNotes["A#"]->getName() );
        self::assertEquals( "SI", $chromaticLatinNotes["B"]->getName() );
    }

    public function testGetNoteByName()
    {
        $chromaticNotes = NoteFactory::getChromaticNotes();

        $note = NoteFactory::getNoteByName( "G", $chromaticNotes );

        self::assertInstanceOf( Note::class, $note );
        self::assertEquals( "G", $note->getName() );
    }

}
