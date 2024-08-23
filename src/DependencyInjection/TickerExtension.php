<?php

declare(strict_types=1);

/**
 * @copyright  Softleister 2008-2024
 * @package    contao-ticker
 * @license    MIT
 * @see        https://github.com/do-while/contao-ticker
 *
 */

namespace Softleister\TickerBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class TickerExtension extends Extension
{
    public function load( array $configs, ContainerBuilder $container ): void
    {
        ( new YamlFileLoader( $container, new FileLocator( __DIR__ . '/../../config' ) ) )
            ->load( 'services.yaml' )
        ;
    }
}
