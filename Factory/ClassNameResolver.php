<?php

namespace Savch\MinkPageObjectBundle\Factory;

interface ClassNameResolver
{
    /**
     * @param string $name
     *
     * @return string
     */
    public function resolvePage($name);

    /**
     * @param string $name
     *
     * @return string
     */
    public function resolveElement($name);
}
