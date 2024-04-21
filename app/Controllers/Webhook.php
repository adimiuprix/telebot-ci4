<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Telegram\Bot\Api;

class Webhook extends BaseController
{
    public function set()
    {
        $telegram = new Api('6593743214:AAEK9CEF5sLnRC8jxcTj2H79CdtN0FtoZRA');
        $response = $telegram->setWebhook(['url' => 'https://degenbot.com/6593743214:AAEK9CEF5sLnRC8jxcTj2H79CdtN0FtoZRA/webhook']);
        dd($response);
    }

    public function delete(){
        $telegram = new Api('6593743214:AAEK9CEF5sLnRC8jxcTj2H79CdtN0FtoZRA');
        $response = $telegram->removeWebhook();
        dd($response);
    }
}
