<?php

namespace Digia\GraphQL\Language\AST\Node;

use Digia\GraphQL\Language\AST\KindEnum;
use Digia\GraphQL\Language\AST\Node\Behavior\DirectivesTrait;
use Digia\GraphQL\Language\AST\Node\Behavior\KindTrait;
use Digia\GraphQL\Language\AST\Node\Behavior\LocationTrait;
use Digia\GraphQL\Language\AST\Node\Behavior\NameTrait;
use Digia\GraphQL\Language\AST\Node\Contract\TypeExtensionNodeInterface;
use Digia\GraphQL\ConfigObject;

class ScalarTypeExtensionNode extends ConfigObject implements TypeExtensionNodeInterface
{

    use KindTrait;
    use LocationTrait;
    use NameTrait;
    use DirectivesTrait;

    /**
     * @var string
     */
    protected $kind = KindEnum::SCALAR_TYPE_EXTENSION;
}
