<?php
/**
 * Poppler-PHP
 *
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/12/2016
 * Time:    5:24 PM
 **/

namespace Figoware\PopplerPhp\PopplerOptions;

use Figoware\PopplerPhp\Constants as C;

/**
 * Trait HelpFlags
 * @package Figoware\PopplerPhp\PopplerOptions
 */
trait HelpFlags
{
    /**
     * @return mixed
     */
    public function printHelpInfo()
    {
        return $this->setFlag(C::_H);
    }

    /**
     * @return array
     */
    protected function helpFlags()
    {
        return [C::_H, C::_HELP, C::_HELP_, C::_HELP_Q];
    }
}
