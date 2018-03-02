<?php
namespace Kata;

/*
Divisible by three  —> Return “Fizz”
Divisible by five  —> Return “Buzz”
Divisible by both —> Return “FizzBuzz”
Every other number, return the number
*/

class FizzBuzz
{
    public function test()
    {
    	return 'Test';
    }

    public function check(int $number): string
    {
    	$isFizz = ($number % 3 === 0);
    	$isBuzz = ($number % 5 === 0);

    	if ($isFizz && $isBuzz) {
    		return 'FizzBuzz';
    	}

    	if ($isFizz ) {
    		return 'Fizz';
    	} elseif ($isBuzz) {
    		return 'Buzz';
    	} else {
    		return $number;
    	}
    }
}