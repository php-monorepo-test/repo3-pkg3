<?php

namespace Example\Monorepo1\NS\SubPackage3;

class Class3 {
    public string $foo;

    /**
     * @return string
     */
    public function getFoo(): string
    {
        return $this->foo;
    }

    /**
     * @param string $foo
     */
    public function setFoo(string $foo): void
    {
        $this->foo = $foo;
    }
}
