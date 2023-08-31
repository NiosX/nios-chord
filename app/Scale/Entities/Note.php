<?php

namespace App\Scale\Entities;

class Note
{
    private string $name;

    private array $notations;

    public function __construct( $name, $notations = array() )
    {
        $this->name = $name;
        $this->notations = $notations;
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
    public function getNotations(): array
    {
        return $this->notations;
    }

}
