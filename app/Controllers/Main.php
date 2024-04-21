<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Telegram\Bot\Api;
use Telegram\Bot\FileUpload\InputFile;  // Digunakan untuk mengirim gambar melalui input
use Telegram\Bot\Commands\Command;

class Main extends Controller
{
    public function sendMesssage(): void
    {
        $telegram = new Api('6593743214:AAEK9CEF5sLnRC8jxcTj2H79CdtN0FtoZRA', true);

        // Kirim text saja
        // $telegram->sendMessage([
        //     'chat_id' => '5603812578',
        //     'text' => 'Hello World',
        // ]);

        // Kirim text dan gambar
        // $remoteImage = 'https://www.unhcr.org/id/wp-content/themes/unhcr_pagebuilder/img/unhcr-logo-Indonesia-en.png';
        // $filename = 'photo.jpg';
        // $telegram->sendPhoto([
        //     'chat_id' => '5603812578',
        //     'photo' => InputFile::create($remoteImage, $filename),
        //     'caption' => 'Teks dari gambar dan informasi disini'
        // ]);
    }

}
