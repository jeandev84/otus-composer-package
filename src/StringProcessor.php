<?php
declare(strict_types=1);

namespace Jeandev84\OtusComposerPackage;

class StringProcessor
{
    public function getLength(string $s): int
    {
        return strlen($s);
    }
}