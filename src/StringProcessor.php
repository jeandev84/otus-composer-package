<?php
declare(strict_types=1);

namespace JeanDev\OtusComposerPackage;


/**
 * @StringProcessor
 *
 * @author <Jean-Claude> <<jeanyao@ymail.com>>
 *
 * @version 1.0.0
 *
 * @package JeanDev\OtusComposerPackage
 *
 * @copyright 2020 <Jean-Claude>
 *
 * @license MIT
*/
class StringProcessor
{
      public function getLength(string $s): int
      {
          return strlen($s);
      }
}