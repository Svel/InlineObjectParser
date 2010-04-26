<?php

/**
 * Returns a substring of the given text
 * 
 * Usage:
 * require_once '/path/to/lib/types/InlineObjectSubstring.php';
 * 
 * $parser = new InlineObjectParser();
 * $parser->addType('substring', 'InlineObjectSubstring');
 * echo $parser->parse('Return only a "[substring:portion length=4 start=2]" of a word.');
 * 
 * @package     InlineObjectParser
 * @subpackage  types
 * @author      Ryan Weaver <ryan@thatsquality.com>
 */

class InlineObjectSubstring extends InlineObjectType
{
  public function render()
  {
    $start = $this->getOption('start', 0);
    $length = $this->getOption('length', false);
    
    if ($length === false)
    {
      return substr($this->getName(), $start);
    }
    else
    {
      return substr($this->getName(), $start, $length);
    }
  }
}