<?php
namespace App\CustomClasses;
use App\Interfaces\IOperations as IOperations;

class Calculator
{

    private $operation;


    function __construct(IOperations $operation)
    {
        $this->operation=$operation;
    }


    public function calculate()
    {
        return $this->operation->getResult();
    }
}
