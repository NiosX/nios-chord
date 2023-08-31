<?php

namespace App\Scale\Services;

use App\Scale\Entities\Note;
use Closure;
use Illuminate\Support\Collection;

class NoteService
{
    /**
     * @var Collection[Note] $chromaticNotes
     */
    private Collection $chromaticNotes;

    /**
     * @var Collection[Note] $chromaticLatinNotes
     */
    private Collection $chromaticLatinNotes;

    public function __construct()
    {
        $this->chromaticNotes = $this->setChromaticNotes();
        $this->chromaticLatinNotes = $this->setLatinNoteNames();
    }

    /**
     * @return Collection
     */
    public function setChromaticNotes(): Collection
    {
        return new Collection( [
            1 => new Note( "C", [] ),
            2 => new Note( "C#", [ "Db" ] ),
            3 => new Note( "D", [] ),
            4 => new Note( "D#", [ "Eb" ] ),
            5 => new Note( "E", [] ),
            6 => new Note( "F", [] ),
            7 => new Note( "F#", [ "Gb" ] ),
            8 => new Note( "G", [] ),
            9 => new Note( "G#", [ "Ab" ] ),
            10 => new Note( "A", [] ),
            11 => new Note( "A#", [ "Bb" ] ),
            12 => new Note( "B", [] )
        ] );
    }

    /**
     * @return Collection
     */
    public function setLatinNoteNames(): Collection
    {
        return new Collection( [
            "C" => new Note( "DO", [] ),
            "C#" => new Note( "DO#", [ "REb" ] ),
            "D" => new Note( "RE", [] ),
            "D#" => new Note( "RE#", [ "MIb" ] ),
            "E" => new Note( "MI", [] ),
            "F" => new Note( "FA", [] ),
            "F#" => new Note( "FA#", [ "SOLb" ] ),
            "G" => new Note( "SOL", [] ),
            "G#" => new Note( "SOL#", [ "LAb" ] ),
            "A" => new Note( "LA", [] ),
            "A#" => new Note( "LA#", [ "SIb" ] ),
            "B" => new Note( "SI", [] )
        ] );
    }

    /**
     * @param $noteName
     * @return Note|null
     */
    public function getNoteByName( $noteName ): ?Note
    {
        return $this->chromaticNotes->first( function( Note $note ) use ( $noteName ) {
            return $note->getName() === $noteName;
        } );
    }

    /**
     * @return Collection
     */
    public function getChromaticNotes(): Collection
    {
        return $this->chromaticNotes;
    }

    /**
     * @return Collection
     */
    public function getChromaticLatinNotes(): Collection
    {
        return $this->chromaticLatinNotes;
    }
}
