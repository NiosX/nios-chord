<?php

namespace Domains\Scales\Models;

class Interval
{
    const TONE_VALUE = 1;
    const SEMITONE_VALUE = 0.5;

    private array $names;

    private string $notation;

    private int $tonesQuantity;

    private int $semitonesQuantity;

    /**
     * @param array $names
     * @param string $notation
     * @param int $tonesQuantity
     * @param int $semitonesQuantity
     */
    public function __construct( $names, $notation, $tonesQuantity, $semitonesQuantity )
    {
        $this->names = $names;
        $this->notation = $notation;
        $this->tonesQuantity = $tonesQuantity;
        $this->semitonesQuantity = $semitonesQuantity;
    }

    public function getFirstName()
    {
        return $this->names[0];
    }

    /**
     * @return array
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @return string
     */
    public function getNotation(): string
    {
        return $this->notation;
    }

    /**
     * @return int
     */
    public function getTonesQuantity(): int
    {
        return $this->tonesQuantity;
    }

    /**
     * @return float
     */
    public function getTonesValue(): float
    {
        return $this->tonesQuantity * self::TONE_VALUE;
    }

    /**
     * @return int
     */
    public function getSemitonesQuantity(): int
    {
        return $this->semitonesQuantity;
    }

    public function getSemitonesValue(): float
    {
        return $this->semitonesQuantity * self::SEMITONE_VALUE;
    }
}
