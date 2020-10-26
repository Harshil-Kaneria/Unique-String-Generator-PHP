<?php

namespace Unique\String\Generator;

class UniqueStringGenerator
{
	public function getstring()
    {
        return base64_encode(rand(1,1000).time().rand(1,1000));
        // Basically This is Return Encoding in Base64 of RandomNumber(1-1000)+"_"+CurrentTimeInMilliSecond +"_"+RandomNumber(1-1000)
    }
}
