<?php

function isPrime(int $number): bool
{
    for ($k = 2; $k < $number; $k++) {
        if ($number % $k === 0) {
            return false;
        }
    }

    return true;
}