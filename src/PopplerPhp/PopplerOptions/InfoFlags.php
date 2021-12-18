<?php

namespace Figoware\PopplerPhp\PopplerOptions;

use Figoware\PopplerPhp\Constants as C;

/**
 * Trait InfoFlags
 * @package Figoware\PopplerPhp\PopplerOptions
 */
trait InfoFlags
{
    /**
     * @return mixed
     */
    public function setBox()
    {
        return $this->setFlag(C::_BOX);
    }

    /**
     * @return array
     */
    protected function infoFlags()
    {
        return [C::_BOX];
    }
}
