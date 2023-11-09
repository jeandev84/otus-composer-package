<?php
declare(strict_types=1);

namespace JeanDev\OtusComposerPackage;


class StringProcessor
{
      public function getLength(string $s): int
      {
          return strlen($s);
      }
}