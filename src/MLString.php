<?php

namespace MLString;

class MLString
{
    /**
     * @var string[]
     */
    protected $lines;

    public function __construct(string ...$lines)
    {
        $this->lines = $lines;
    }

    public static function of(string ...$lines): self
    {
        return new self(...$lines);
    }

    public function __toString(): string
    {
        return implode(PHP_EOL, $this->lines);
    }
}
