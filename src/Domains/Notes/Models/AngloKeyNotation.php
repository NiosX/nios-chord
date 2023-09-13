<?php

namespace Domains\Notes\Models;

use Illuminate\Support\Collection;

class AngloKeyNotation implements KeyNotation
{

    /**
     * @return Collection
     */
    public function getKeysInNotation(): Collection
    {
        return new Collection( [
            "C" => new Note( "C", [] ),
            "C#" => new Note( "C#", [ "Db" ] ),
            "D" => new Note( "D", [] ),
            "D#" => new Note( "D#", [ "Eb" ] ),
            "E" => new Note( "E", [] ),
            "F" => new Note( "F", [] ),
            "F#" => new Note( "F#", [ "Gb" ] ),
            "G" => new Note( "G", [] ),
            "G#" => new Note( "G#", [ "Ab" ] ),
            "A" => new Note( "A", [] ),
            "A#" => new Note( "A#", [ "Bb" ] ),
            "B" => new Note( "B", [] )
        ] );
    }
}
