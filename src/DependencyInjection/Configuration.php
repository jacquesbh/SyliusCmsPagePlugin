<?php

/*
 * This file is part of Monsieur Biz' Cms Page plugin for Sylius.
 *
 * (c) Monsieur Biz <sylius@monsieurbiz.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace MonsieurBiz\SyliusCmsPagePlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('monsieurbiz_sylius_cms_page');
        if (method_exists($treeBuilder, 'getRootNode')) {
            $treeBuilder->getRootNode();
        } else {
            // BC layer for symfony/config 4.1 and older
            /** @scrutinizer ignore-deprecated */ $treeBuilder->root('monsieurbiz_sylius_cms_page');
        }

        return $treeBuilder;
    }
}
