<?php

namespace Domains\Notes\Services;

use Illuminate\Support\Collection;
use Domains\Notes\Models\KeyNotation;
use Domains\Notes\Models\Note;

class NoteService
{
    /**
     * @param Collection $notes [Note]
     * @param KeyNotation $keyNotation
     * @return Collection[Note]
     */
    public static function changeKeyNotation( $notes, $keyNotation ): Collection
    {
        $convertedNotes = new Collection();
        $notesInRequestedNotation = $keyNotation->getKeysInNotation();

        $notes->each( function( Note $convertedNote, $keyIndexName ) use ( $notesInRequestedNotation, $convertedNotes ) {
            if( isset( $notesInRequestedNotation[$keyIndexName] ) )
            {
                $convertedNote = $notesInRequestedNotation[$keyIndexName];
                $convertedNotes->put( $keyIndexName, $convertedNote );
            }
        } );
        return $convertedNotes;
    }
}
