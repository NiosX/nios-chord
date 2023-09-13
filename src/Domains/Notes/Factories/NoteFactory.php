<?php

namespace Domains\Notes\Factories;

use Illuminate\Support\Collection;
use Domains\Notes\Models\AngloKeyNotation;
use Domains\Notes\Models\Note;

class NoteFactory
{

    /**
     * @param string $noteName
     * @param Collection $notes
     * @return Note|null
     */
    public static function getNoteByName( $noteName, $notes ): ?Note
    {
        return $notes->first( function( Note $note ) use ( $noteName ) {
            return $note->getName() === $noteName;
        } );
    }

    /**
     * @return Collection[Note]
     */
    public static function getChromaticNotes(): Collection
    {
        $angloKeyNotation = new AngloKeyNotation();
        return $angloKeyNotation->getKeysInNotation();
    }
}
