<?php
/**
 * Poppler-PHP
 *
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/13/2016
 * Time:    1:08 AM
 **/

namespace Figoware\PopplerPhp\PopplerOptions;

use Figoware\PopplerPhp\Constants as C;

/**
 * Trait ConsoleFlags
 * @package Figoware\PopplerPhp\PopplerOptions
 */
trait ConsoleFlags
{
    use HelpFlags;
    use VersionFlags;

    /**
     * @return array
     */
    protected function allConsoleFlags()
    {
        return array_merge(
            $this->consoleFlags(),
            $this->helpFlags(),
            $this->versionFlags()
        );
    }

    /**
     * @return array
     */
    protected function consoleFlags()
    {
        return [C::_Q, C::_STDOUT];
    }
}
