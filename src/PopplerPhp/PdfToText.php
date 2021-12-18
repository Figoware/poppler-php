<?php
/**
 * Poppler-PHP
 *
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/14/2016
 * Time:    3:36 PM
 **/

namespace Figoware\PopplerPhp;

use Figoware\PopplerPhp\Constants as C;
use Figoware\PopplerPhp\PopplerOptions\ConsoleFlags;
use Figoware\PopplerPhp\PopplerOptions\CredentialOptions;
use Figoware\PopplerPhp\PopplerOptions\EncodingOptions;
use Figoware\PopplerPhp\PopplerOptions\HtmlOptions;
use Figoware\PopplerPhp\PopplerOptions\PageRangeOptions;
use Figoware\PopplerPhp\PopplerOptions\TextFlags;

/**
 * Class PdfToText
 * @package Figoware\PopplerPhp
 */
class PdfToText extends PopplerUtil
{
    use PageRangeOptions;
    use ConsoleFlags;
    use HtmlOptions;
    use EncodingOptions;
    use CredentialOptions;
    use TextFlags;


    /**
     * PdfToCairo constructor.
     *
     * @param string $pdfFile
     * @param array $options
     * @throws Exceptions\PopplerPhpException
     */
    public function __construct($pdfFile = '', array $options = [])
    {
        $this->binFile = C::PDF_TO_TEXT;

        return parent::__construct($pdfFile, $options);
    }

    /**
     * @return array|mixed
     */
    public function utilOptions()
    {
        return array_merge(
            $this->pageRangeOptions(),
            $this->htmlOptions(),
            $this->credentialOptions(),
            $this->encodingOptions()
        );
    }

    /**
     * @return array|mixed
     */
    public function utilOptionRules()
    {
        return [
            'alt' => [],
        ];
    }

    /**
     * @return array|mixed
     */
    public function utilFlags()
    {
        return $this->textFlags();
    }

    /**
     * @return array|mixed
     */
    public function utilFlagRules()
    {
        return [
            'alt' => [],
        ];
    }

    /**
     * @return mixed|string
     */
    public function outputExtension()
    {
        return '.txt';
    }

       /**
     * @return string
     */
    public function generate()
    {
        $this->outputFileExtension = $this->outputExtension();

        return $this->shellExec();
    }

    /**
     * @param $page
     * @return PdfToText
     * @throws Exceptions\PopplerPhpException
     */
    public function startFromPage($page)
    {
        return $this->setOption(C::_F, $page);
    }

    /**
     * @param $page
     * @return PdfToText
     * @throws Exceptions\PopplerPhpException
     */
    public function stopAtPage($page)
    {
        return $this->setOption(C::_L, $page);
    }

    /**
     * @return array
     */
    protected function pageRangeOptions()
    {
        return [
            C::_F => C::T_INTEGER,
            C::_L => C::T_INTEGER,
        ];
    }
}
