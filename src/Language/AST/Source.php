<?php

namespace Digia\GraphQL\Language\AST;

use Digia\GraphQL\ConfigObject;
use function Digia\GraphQL\Util\invariant;

/**
 * A representation of source input to GraphQL.
 * `name` and `locationOffset` are optional. They are useful for clients who
 * store GraphQL documents in source files; for example, if the GraphQL input
 * starts at line 40 in a file named Foo.graphql, it might be useful for name to
 * be "Foo.graphql", line to be 40 and column to be 0.
 * line and column are 1-indexed
 */

class Source extends ConfigObject
{

    /**
     * @var string
     */
    private $body;

    /**
     * @var string
     */
    private $name = 'GraphQL request';

    /**
     * @var int
     */
    private $line = 1;

    /**
     * @var int
     */
    private $column = 1;

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getLine(): int
    {
        return $this->line;
    }

    /**
     * @return int
     */
    public function getColumn(): int
    {
        return $this->column;
    }

    /**
     * @param string $body
     * @return Source
     */
    protected function setBody(string $body): Source
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @param string $name
     * @return Source
     */
    protected function setName(string $name): Source
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param int $line
     * @return Source
     * @throws \Exception
     */
    protected function setLine(int $line): Source
    {
        invariant($line > 0, 'line is 1-indexed and must be positive');

        $this->line = $line;
        return $this;
    }

    /**
     * @param int $column
     * @return Source
     * @throws \Exception
     */
    protected function setColumn(int $column): Source
    {
        invariant($column > 0, 'column is 1-indexed and must be positive');

        $this->column = $column;
        return $this;
    }
}
