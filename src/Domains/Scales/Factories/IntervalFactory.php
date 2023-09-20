<?php

namespace Domains\Scales\Factories;

use Domains\Scales\Models\Interval;
use Illuminate\Support\Collection;

class IntervalFactory
{
    /**
     * @return Collection[Interval]
     */
    public static function getSimpleInterval()
    {
        return new Collection( [
            new Interval( [ "Unísono" ], "U", 0, 0 ),
            new Interval( [ "Segunda menor" ], "m2", 0, 1 ),
            new Interval( [ "Segunda mayor", "Tercera disminuida" ], "M2", 1, 0 ),
            new Interval( [ "Tercera menor", "Segunda aumentada" ], "m3", 1, 1 ),
            new Interval( [ "Tercera mayor", "Cuarta disminuida" ], "M3", 2, 0 ),
            new Interval( [ "Cuarta justa", "Tercera aumentada" ], "P4", 2, 1 ),
            new Interval( [ "Cuarta aumentada", "Quinta disminuida","Tritono" ], "TT", 2, 2 ),
            new Interval( [ "Quinta justa", "Sexta disminuida" ], "P5", 3, 1 ),
            new Interval( [ "Sexta menor", "Quinta aumentada" ], "m6", 3, 2 ),
            new Interval( [ "Sexta mayor", "Séptima disminuida" ], "M6", 4, 1 ),
            new Interval( [ "Séptima menor", "Sexta aumentada" ], "m7", 4, 2 ),
            new Interval( [ "Séptima mayor" ], "M7", 5, 1 ),
            new Interval( [ "Octava Justa" ], "P8", 5, 2 )
        ] );
    }
}
