<?php

namespace Domains\Scales\Models;


use Illuminate\Support\Collection;

class ScaleSimpleInterval
{
    /**
     * @var Collection[Interval]
     */
    private Collection $intervalSteps;

    /**
     * @param Collection $intervalSteps
     */
    public function __construct( $intervalSteps )
    {
        $this->intervalSteps = $intervalSteps;
    }

    /**
     * @return Collection[Interval]
     */
    public function getIntervalSteps(): Collection
    {
        return $this->intervalSteps;
    }

    /**
     * @param Collection $intervalSteps
     */
    public function setIntervalSteps( Collection $intervalSteps ): void
    {
        $this->intervalSteps = $intervalSteps;
    }

    /**
     * @return Collection[Interval]
     */
    public function getIntervalStepsForScale(): Collection
    {
        $intervalForScale = new Collection();
        foreach( $this->intervalSteps as $intervalStep )
        {
            $intervalForScale->add( $intervalStep->getTonesValue() + $intervalStep->getSemitonesValue() );
        }
        return $intervalForScale;
    }


}
