<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Telegram\Bot\Api;

class Commands extends BaseController
{
    protected string $name = 'start';
    protected string $pattern = '{username}';
    protected string $description = 'Start Command to get you started';

    public function handle()
    {
        $telegram = new Api('6593743214:AAEK9CEF5sLnRC8jxcTj2H79CdtN0FtoZRA', true);
    }
}