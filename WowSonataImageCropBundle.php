<?php

namespace Wow\SonataImageCropBundleBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Wow\SonataImageCropBundleBundle\DependencyInjection\Compiler\RequestHandlerPass;

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
