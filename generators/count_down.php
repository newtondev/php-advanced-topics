<?php
function &count_down($value) {
    while($value > 0) {
        yield $value;
    }
}

foreach (count_down(3) as &$val) {
  echo "${val}\n";
  $val--;
}
