<?php
function isPrime($num)
{
  if ($num < 2) {
    return false;
  }
  for ($i = 2; $i <= sqrt($num); $i++) {
    if ($num % $i == 0) {
      return false;
    }
  }
  return true;
}

$num = 14;
if (isPrime($num)) {
  echo "é primo";
} else {
  echo "não é";
}
