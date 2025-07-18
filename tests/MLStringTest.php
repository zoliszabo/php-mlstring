<?php

use MLString\MLString;
use PHPUnit\Framework\TestCase;

class MLStringTest extends TestCase
{
    public function test_new_and_implicit_casting()
    {
        $mlString = new MLString('a', 'b', 'c');
        $this->assertEquals("a\nb\nc", $mlString);
    }

    public function test_of_and_to_string()
    {
        $mlString = MLString::of('a', 'b', 'c');
        $this->assertEquals("a\nb\nc", (string) $mlString);
    }

    public function test_with_glue()
    {
        $mlString = MLString::of('a', 'b', 'c')->withGlue(',');
        $this->assertEquals("a,b,c", (string) $mlString);
    }

    public function test_with_new_line()
    {
        $mlString = MLString::of('a', 'b', 'c')->withGlue(',')->withNewLine();
        $this->assertEquals("a\nb\nc", (string) $mlString);
    }

    public function test_with_space()
    {
        $mlString = MLString::of('a', 'b', 'c')->withSpace();
        $this->assertEquals("a b c", (string) $mlString);
    }
}
