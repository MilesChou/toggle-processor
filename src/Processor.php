<?php

namespace MilesChou\Toggle;

use MilesChou\Toggle\Simplify\ProcessorInterface;

abstract class Processor implements ProcessorInterface
{
    /**
     * @param array $context
     * @return mixed
     */
    final public function __invoke(array $context = [])
    {
        return $this->handle($context);
    }

    /**
     * @param array $context
     * @return mixed
     */
    abstract protected function handle($context);
}
