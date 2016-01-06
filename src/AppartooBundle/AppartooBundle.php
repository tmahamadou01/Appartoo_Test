<?php

namespace AppartooBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppartooBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
