<?php

namespace MLString;

class MLString
{
    /**
     * @var string[]
     */
    protected $lines;

    /**
     * @var string
     */
    protected $glue;

    public function __construct(string ...$lines)
    {
        $this->lines = $lines;
        $this->withNewLine();
    }

    public static function of(string ...$lines): self
    {
        return new self(...$lines);
    }

    public function __toString(): string
    {
        return implode($this->glue, $this->lines);
    }

    public function withGlue(string $separator): self
    {
        $this->glue = $separator;
        return $this;
    }

    public function withNewLine(): self
    {
        return $this->withGlue(PHP_EOL);
    }

    public function withSpace(): self
    {
        return $this->withGlue(' ');
    }
}
