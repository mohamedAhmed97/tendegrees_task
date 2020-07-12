<?php

namespace App\Strategies;

use App\Strategies\Interfaces\VerifcationStrategy;

class VerificationContext
{
    private $verifcationStrategy;
    
    public function setStrategy(VerifcationStrategy $verifcationStrategy)
    {
        $this->verifcationStrategy = $verifcationStrategy;  
    }

    public function create($request)
    {
        return $this->verifcationStrategy->create($request);   
    }

    public function verify($request)
    {
        return $this->verifcationStrategy->verify($request);  
    }
}
