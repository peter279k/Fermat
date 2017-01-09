<?php

namespace Samsara\Fermat\Values;

use Samsara\Fermat\Types\Fraction;
use Samsara\Fermat\Values\Base\FractionInterface;
use Samsara\Fermat\Values\Base\NumberInterface;

class ImmutableFraction extends Fraction implements NumberInterface, FractionInterface
{

    protected function setValue(ImmutableNumber $numerator, ImmutableNumber $denominator)
    {

        return new ImmutableFraction($numerator->getValue().'/'.$denominator->getValue(), $this->base);

    }

}