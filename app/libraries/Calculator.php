<?php namespace App\Libraries;

    class Calculator{

        public function addNumber($x, $y)
        {
            if (!is_numeric($x) || !is_numeric($y))
            {
                throw new \InvalidArgumentException('One of this values is not a numeric value');
            }
            return $x + $y;
        }

        public function multiplyNumber($x, $y)
        {
            if (!is_numeric($x) || !is_numeric($y))
            {
                throw new \InvalidArgumentException('One of this values is not a numeric value');
            }
            return $x * $y;
        }

        public function divideNumber($x, $y)
        {
            if (!is_numeric($x) || !is_numeric($y))
            {
                throw new \InvalidArgumentException('One of this values is not a numeric value');
            }
            return $x / $y;
        }

        public function subtractNumber($x, $y)
        {
            if (!is_numeric($x) || !is_numeric($y))
            {
                throw new \InvalidArgumentException('One of this values is not a numeric value');
            }
            return $x - $y;
        }

    }
