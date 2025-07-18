<?php

namespace MLString;

function MLString(string ...$lines): MLString
{
    return new MLString(...$lines);
}
