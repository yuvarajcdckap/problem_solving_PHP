<?php


function checkPrimeOrNot($num)
{
    if (is_int($num)) {
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0)
              return false;
        }
        return true;
    }
}

$checked=checkPrimeOrNot(35);
if($checked)
    echo 'it is a prime number';
else
    echo 'it is composite number';
