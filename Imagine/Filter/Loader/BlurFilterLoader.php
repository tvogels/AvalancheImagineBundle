<?php

namespace Avalanche\Bundle\ImagineBundle\Imagine\Filter\Loader;

use Imagine\Image\ManipulatorInterface;
use Vit\EendrachtBundle\Filter\Blur

class BlurFilterLoader implements LoaderInterface
{
    public function load(array $options = array())
    {
        return new Blur($options['radius']);
    }
}
