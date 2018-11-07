<?php

class SerializableObj implements \JsonSerializable
{
    private $internalCallable;

    public function __construct()
    {
        $this->internalCallable = function () {
        };
    }

    public function jsonSerialize()
    {
        return [
            'foo' => 42,
        ];
    }
}
