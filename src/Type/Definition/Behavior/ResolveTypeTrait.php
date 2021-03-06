<?php

namespace Digia\GraphQL\Type\Definition\Behavior;

use Digia\GraphQL\Type\Definition\Contract\TypeInterface;

trait ResolveTypeTrait
{

    /**
     * @var ?callable
     */
    private $resolveTypeFunction;

    /**
     * @param array ...$args
     * @return TypeInterface|null
     */
    public function resolveType(...$args): ?TypeInterface
    {
        return call_user_func_array($this->resolveTypeFunction, $args);
    }

    /**
     * @param callable|null $resolveTypeFunction
     * @return $this
     */
    protected function setResolveType(?callable $resolveTypeFunction)
    {
        $this->resolveTypeFunction = $resolveTypeFunction;

        return $this;
    }
}
