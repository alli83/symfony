<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class ProjectServiceContainer extends Container
{
    protected $parameters = [];
    protected \Closure $getService;

    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMap = [
            'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber' => 'getTestServiceSubscriberService',
            'foo_service' => 'getFooServiceService',
            'late_alias' => 'getLateAliasService',
        ];
        $this->aliases = [
            'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestDefinition1' => 'late_alias',
        ];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return [
            '.service_locator.0H1ht0q' => true,
            '.service_locator.0H1ht0q.foo_service' => true,
            '.service_locator.2hyyc9y' => true,
            '.service_locator.KGUGnmw' => true,
            'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition' => true,
        ];
    }

    /**
     * Gets the public 'Symfony\Component\DependencyInjection\Tests\Fixtures\TestServiceSubscriber' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Tests\Fixtures\TestServiceSubscriber
     */
    protected static function getTestServiceSubscriberService($container)
    {
        return $container->services['Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber'] = new \Symfony\Component\DependencyInjection\Tests\Fixtures\TestServiceSubscriber();
    }

    /**
     * Gets the public 'foo_service' shared autowired service.
     *
     * @return \Symfony\Component\DependencyInjection\Tests\Fixtures\TestServiceSubscriber
     */
    protected static function getFooServiceService($container)
    {
        return $container->services['foo_service'] = new \Symfony\Component\DependencyInjection\Tests\Fixtures\TestServiceSubscriber((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition' => ['privates', 'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition', 'getCustomDefinitionService', false],
            'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber' => ['services', 'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber', 'getTestServiceSubscriberService', false],
            'bar' => ['services', 'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber', 'getTestServiceSubscriberService', false],
            'baz' => ['privates', 'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition', 'getCustomDefinitionService', false],
            'late_alias' => ['services', 'late_alias', 'getLateAliasService', false],
        ], [
            'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition' => 'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition',
            'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber' => 'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber',
            'bar' => 'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition',
            'baz' => 'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition',
            'late_alias' => 'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestDefinition1',
        ]))->withContext('foo_service', $container));
    }

    /**
     * Gets the public 'late_alias' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Tests\Fixtures\TestDefinition1
     */
    protected static function getLateAliasService($container)
    {
        return $container->services['late_alias'] = new \Symfony\Component\DependencyInjection\Tests\Fixtures\TestDefinition1();
    }

    /**
     * Gets the private 'Symfony\Component\DependencyInjection\Tests\Fixtures\CustomDefinition' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Tests\Fixtures\CustomDefinition
     */
    protected static function getCustomDefinitionService($container)
    {
        return $container->privates['Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition'] = new \Symfony\Component\DependencyInjection\Tests\Fixtures\CustomDefinition();
    }
}
