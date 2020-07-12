<?php

namespace App\Strategies\Classes;

use App\Strategies\Interfaces\VerifcationStrategy;
use Error;
use Twilio\Rest\Client;

class SmsVerifcation implements VerifcationStrategy{

    private $token;
    private $twilio_sid;
    private $twilio_verify_sid;
    public function __construct()
    {
        $this->token = config('twilio.token');
        $this->twilio_sid = config('twilio.sid');
        $this->twilio_verify_sid = config('twilio.v_sid');
        $this->twilio = new Client($this->twilio_sid, $this->token);
    }
    public function create($request)
    {
        try{
        $this->twilio->verify->v2->services($this->twilio_verify_sid)
            ->verifications
            ->create($request->phone_number, "sms");
        return response()->json([
            "phone_number" => $request->phone_number,
            "status" => 200
        ]);
    } catch (Error $e) {
        return response()->json([
            "error" => $e
        ]);
    }
    }

}
