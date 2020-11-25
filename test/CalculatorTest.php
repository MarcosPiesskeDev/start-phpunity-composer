<?php

    use App\Libraries\Calculator;
    use \PHPUnit\Framework\TestCase;

    class CalculatorTest extends TestCase{

        public function testAdd()
        {  
            $this->assertEquals(4, Calculator::addNumber(2,2));
        }

        public function testMultply()
        {
            $this->assertEquals(8, Calculator::multiplyNumber(2,4));
        }

        public function testDivide()
        {
            $this->assertEquals(6, Calculator::divideNumber(12,2));
        }

        public function testSubtract()
        {
            $this->assertEquals(10, Calculator::subtractNumber(15,5));
        }

        public function testNotNumberException()
        {
            $this->expectException(InvalidArgumentException::class);
            Calculator::addNumber('', []);
            Calculator::multiplyNumber('', []);
            Calculator::divideNumber('', []);
            Calculator::subtractNumber('', []);
        }
    }
