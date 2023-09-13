<?php

namespace Domains\Notes\Models;

class Note
{
    private string $name;

    private array $keySignatures;

    public function __construct( $name, $keySignatures = array() )
    {
        $this->name = $name;
        $this->keySignatures = $keySignatures;
    }

    /**
     * @param string $name
     */
    public function setName( string $name ): void
    {
        $this->name = $name;
    }

    /**
     * @param array $keySignatures
     */
    public function setKeySignatures( array $keySignatures ): void
    {
        $this->keySignatures = $keySignatures;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getKeyNames(): array
    {
        $noteNames = $this->getKeySignatures();
        $noteNames[] = $this->name;
        return $noteNames;
    }

    /**
     * @return array
     */
    public function getKeySignatures(): array
    {
        return $this->keySignatures;
    }

}
