<?php

function factorial($n) {
  return $n * factorial($n - 1);
}

echo factorial(5);