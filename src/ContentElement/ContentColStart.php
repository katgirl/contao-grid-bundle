<?php

declare(strict_types=1);

/*
 * This file is part of erdmannfreunde/contao-grid-bundle.
 *
 * (c) Erdmann & Freunde <https://erdmann-freunde.de>
 *
 * @license MIT
 */

namespace ErdmannFreunde\ContaoGridBundle\ContentElement;

use Contao\BackendTemplate;
use Contao\ContentElement;

class ContentColStart extends ContentElement
{
    protected $strTemplate = 'ce_colStart';

    public function compile(): void
    {
    }

    public function generate()
    {
        if (TL_MODE === 'BE') {
            $this->Template = new BackendTemplate('be_wildcard');
            $this->Template->wildcard = '### E&F GRID: Spalte Start ###';

            return $this->Template->parse();
        }

        return parent::generate();
    }
}
