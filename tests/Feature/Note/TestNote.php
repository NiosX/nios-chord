<?php

namespace Note;

use App\Scale\Services\NoteService;
use PHPUnit\Framework\TestCase;
use App\Scale\Entities\Note;

class TestNote extends TestCase
{
    /**
     * @var NoteService $noteService
     */
    public $noteService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->noteService = new NoteService();
    }

    public function testGetChromaticNotes()
    {
        $chromaticNotes = $this->noteService->getChromaticNotes();

        self::assertCount( 12, $chromaticNotes );
        self::assertEquals( "C", $chromaticNotes[1]->getName() );
        self::assertEquals( "C#", $chromaticNotes[2]->getName() );
        self::assertEquals( "D", $chromaticNotes[3]->getName() );
        self::assertEquals( "D#", $chromaticNotes[4]->getName() );
        self::assertEquals( "E", $chromaticNotes[5]->getName() );
        self::assertEquals( "F", $chromaticNotes[6]->getName() );
        self::assertEquals( "F#", $chromaticNotes[7]->getName() );
        self::assertEquals( "G", $chromaticNotes[8]->getName() );
        self::assertEquals( "G#", $chromaticNotes[9]->getName() );
        self::assertEquals( "A", $chromaticNotes[10]->getName() );
        self::assertEquals( "A#", $chromaticNotes[11]->getName() );
        self::assertEquals( "B", $chromaticNotes[12]->getName() );
    }

    public function testGetChromaticLatinNotes()
    {
        $chromaticNotes = $this->noteService->getChromaticLatinNotes();

        self::assertCount( 12, $chromaticNotes );
        self::assertEquals( "DO", $chromaticNotes["C"]->getName() );
        self::assertEquals( "DO#", $chromaticNotes["C#"]->getName() );
        self::assertEquals( "RE", $chromaticNotes["D"]->getName() );
        self::assertEquals( "RE#", $chromaticNotes["D#"]->getName() );
        self::assertEquals( "MI", $chromaticNotes["E"]->getName() );
        self::assertEquals( "FA", $chromaticNotes["F"]->getName() );
        self::assertEquals( "FA#", $chromaticNotes["F#"]->getName() );
        self::assertEquals( "SOL", $chromaticNotes["G"]->getName() );
        self::assertEquals( "SOL#", $chromaticNotes["G#"]->getName() );
        self::assertEquals( "LA", $chromaticNotes["A"]->getName() );
        self::assertEquals( "LA#", $chromaticNotes["A#"]->getName() );
        self::assertEquals( "SI", $chromaticNotes["B"]->getName() );
    }

    public function testGetNoteByName()
    {
        $note = $this->noteService->getNoteByName( "G" );

        self::assertInstanceOf(Note::class, $note);
        self::assertEquals( "G", $note->getName() );
    }

}
