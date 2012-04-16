<?php

namespace Bait\PollBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('bait_poll');

        $rootNode
            ->children()
                ->scalarNode('db_driver')->cannotBeOverwritten()->isRequired()->end()
                ->scalarNode('model_manager_name')->defaultNull()->end()

                ->arrayNode('form')->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('type')->defaultValue('bait_poll.form')->end()
                        ->scalarNode('name')->defaultValue('bait_poll_form')->end()
                        ->scalarNode('factory')->defaultValue('bait_poll.form_factory.default')->end()
                    ->end()
                ->end()

                ->arrayNode('poll')
                    ->children()
                        ->scalarNode('class')->end()
                    ->end()
                ->end()

                ->arrayNode('poll_field')
                    ->children()
                        ->scalarNode('class')->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
