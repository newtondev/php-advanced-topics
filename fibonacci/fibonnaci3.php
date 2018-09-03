<?php
function fibonacci($position = 1) {
  $last = 0; $current = 1;
  $i = 0;
  yield $i => 1;
  while ($i < $position) {
    $current = $last + $current;
    $last = $current - $last;
    $i++;
    yield $i => $current;
  }
  return;
}

foreach (fibonacci(7) as $key => $value) {
  echo "{$key} => {$value}\n";
}
