<?php

namespace Shopware\Themes\PmTheme;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
Pm and stuff
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'
PM
SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'
PM
SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'
PM
SHOPWARE_EOD;

    public function createConfig(Form\Container\TabContainer $container)
    {
    }
}