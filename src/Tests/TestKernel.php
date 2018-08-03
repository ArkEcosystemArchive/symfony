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

use ArkEcosystem\ArkBundle\ArkBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class TestKernel extends Kernel
{
    public function getRootDir()
    {
        return __DIR__.'/var';
    }

    public function registerBundles()
    {
        return [new ArkBundle()];
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
    }
}
