<?php

namespace App\Http\Controllers;

use App\Strategies\Classes\MailVerification;
use App\Strategies\Classes\SmsVerifcation;
use App\Strategies\VerificationContext;
use App\Http\Requests\VerificationRequest;



class VerificationController extends Controller
{
    private $verifyContext ;

    public function __construct(VerificationContext $verifyContext)
    {
        $this->verifyContext = $verifyContext;

        if(strtolower(config('twilio.method'))=='sms')
        {
            
            $this->verifyContext->setStrategy(new SmsVerifcation());
        }
        else
        {
            $this->verifyContext->setStrategy(new MailVerification());
        }
    }


    public function create(VerificationRequest $request)
    {
        return $this->verifyContext->create($request);
    }

    
}
