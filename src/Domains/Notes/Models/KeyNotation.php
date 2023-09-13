<?php

namespace Domains\Notes\Models;

use Illuminate\Support\Collection;

interface KeyNotation
{
    /**
     * @return Collection[Note]
     */
    public function getKeysInNotation(): Collection;
}
