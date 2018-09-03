<?php
function fibonacci() {
    $last = 0; $current = 1;
    yield 1;
    while (true) {
      $current = $last + $current;
      $last = $current - $last;
      yield $current;
    }
}

$limit = 50;
$pos = 0;
foreach (fibonacci() as $number) {
    echo $number, "\n";

    $pos++;
    if ($pos === $limit) {
      break;
    }
}
