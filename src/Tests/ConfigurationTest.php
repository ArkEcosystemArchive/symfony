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

namespace ArkEcosystem\ArkBundle\Tests\Functional;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpKernel\Kernel;

/**
 * @coversNothing
 */
class ConfigurationTest extends TestCase
{
    /**
     * @var Kernel
     */
    private $kernel;

    public function setUp()
    {
        $this->kernel = new TestKernel('test', false);
        $this->kernel->boot();
    }

    /**
     * @test
     * @functional
     */
    public function testServiceAvailability()
    {
        $this->assertInstanceOf('ArkEcosystem\Client\Connection', $this->kernel->getContainer()->get('ark.client'));
    }
}
