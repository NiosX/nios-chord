<?php

namespace Domains\Notes\Models;

use Illuminate\Support\Collection;

class LatinKeyNotation implements KeyNotation
{
    /**
     * @return Collection[Note]
     */
    public function getKeysInNotation(): Collection
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
}
