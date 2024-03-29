<?php
const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';

class Calculator
{
    public function calculate($firstOperand, $secondOperand, $operator)
    {
        switch ($operator) {
            case '+':
                return $firstOperand + $secondOperand;
            case '-':
                return $firstOperand - $secondOperand;
            case '*':
                return $firstOperand * $secondOperand;
            case '/':
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                } else {
                    echo("Can not divide by 0");
                    break;
                }
            default:
                echo("Unsupported operation");
        }
    }
}
