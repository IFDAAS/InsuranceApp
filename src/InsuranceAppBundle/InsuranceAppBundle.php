<?php

namespace InsuranceAppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class InsuranceAppBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

