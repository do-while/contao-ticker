<?php

declare(strict_types=1);

/**
 * @copyright  Softleister 2008-2024
 * @package    contao-ticker
 * @license    MIT
 * @see	       https://github.com/do-while/contao-ticker
 *
 */

namespace Softleister\TickerBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Softleister\TickerBundle\TickerBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;


class Plugin implements BundlePluginInterface
{
    public function getBundles( ParserInterface $parser )
    {
        return [
            BundleConfig::create( TickerBundle::class )
                ->setLoadAfter( [ContaoCoreBundle::class] )
                ->setReplace( ['ticker'] ),
        ];
    }
}
