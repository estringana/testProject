<?php
namespace Kata\Tests;

use Kata\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function testFunction()
    {
        $kata = new FizzBuzz();

        $this->assertEquals('Test', $kata->test());
    }

    public function testNumberThree()
    {
        $kata = new FizzBuzz();

        $this->assertEquals('Fizz', $kata->check(3));
    }

    public function testNubmerFive()
    {
        $kata = new FizzBuzz();

        $this->assertEquals('Buzz', $kata->check(5));
    }

    public function testNubmerFithteen()
    {
        $kata = new FizzBuzz();

        $this->assertEquals('FizzBuzz', $kata->check(15));
    }

    public function testNubmerTwo()
    {
        $kata = new FizzBuzz();

        $this->assertEquals('2', $kata->check(2));
    }

}