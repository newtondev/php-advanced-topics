<?php
function fibonacci($position = 1) {
  $last = 0; $current = 1;
  yield 1;
  $i = 0;
  while ($i < $position) {
    $current = $last + $current;
    $last = $current - $last;
    yield $current;
    $i++;
  }
  return;
}

foreach (fibonacci(15) as $value) {
  echo "{$value}\n";
}
