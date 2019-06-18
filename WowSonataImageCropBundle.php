<?php

namespace Wow\SonataImageCropBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Wow\SonataImageCropBundle\DependencyInjection\Compiler\RequestHandlerPass;

/**
 * Bundle.
 *
 * @author Matt Bilton <matteaocha@gmail.com>
 */
class WowSonataImageCropBundle extends Bundle
{

	public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new RequestHandlerPass());
    }

}
