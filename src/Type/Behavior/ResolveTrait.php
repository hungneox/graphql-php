<?php

namespace Digia\GraphQL\Type\Behavior;

trait ResolveTrait
{

    /**
     * @var callable
     */
    private $resolve;

    /**
     * @param callable $resolve
     * @return $this
     */
    protected function setResolve(callable $resolve)
    {
        $this->resolve = $resolve;

        return $this;
    }
}