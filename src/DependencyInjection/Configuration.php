<?php

declare(strict_types=1);

/*
 * This file is part of Ark Bundle.
 *
 * (c) Ark Ecosystem <info@ark.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ArkEcosystem\ArkBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the configuration class.
 *
 * @author Brian Faust <brian@ark.io>
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $rootNode = $treeBuilder->root('ark');
        $rootNode
            ->children()
            ->scalarNode('host')->defaultNull()->end()
            ->scalarNode('api_version')->defaultNull()->end()
            ->end();

        return $treeBuilder;
    }
}
