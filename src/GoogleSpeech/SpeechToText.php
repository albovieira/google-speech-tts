<?php

namespace GoogleSpeech;

use GuzzleHttp\Client;

class SpeechToText
{

    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function convert(){
        /*$response =  $this->client->post(

        );*/
    }

    public function wave(){
        //"http://api.twilio.com/2010-04-01/Accounts/AC1a5cb11fc93ebd4c8df75d7b056e62bb/Recordings/RE3525f04a13b7630533acc1ce73660074";

    }


    function voiceToText($voicePath){

    }


}