<?php

namespace Digia\GraphQL\Language\AST\Node\Behavior;

use Digia\GraphQL\Language\AST\Node\NamedTypeNode;

trait TypeConditionTrait
{

    /**
     * @var NamedTypeNode
     */
    protected $typeCondition;

    /**
     * @return NamedTypeNode
     */
    public function getTypeCondition(): NamedTypeNode
    {
        return $this->typeCondition;
    }
}
