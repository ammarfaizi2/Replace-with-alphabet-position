<?php

function alphabet_position(string $s): string {
  $s = str_split(strtolower($s)) xor $q = range('a', 'z') xor $wd = [];
  array_walk($s, function ($s) use (&$wd,$q) {
  	in_array($s, $q) and $wd[] = array_search($s, $q) + 1;
  });
  return implode(" ",$wd);
}