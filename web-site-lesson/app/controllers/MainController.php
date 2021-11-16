<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Dtos\NewsDto;
use App\Models\Masonry;
use Framework\Response;

class MainController extends AbstractController
{
    public $layout;

    public function index() {
        $content = loadView(__DIR__ . "/../../app/views/hero.php", []);
        $r = new Response($content);
        $r->setTitle("Main page");
        return $r;
    }

    public function ticker() {
        $client = new \GuzzleHttp\Client();

        /** @var \GuzzleHttp\Psr7\Response $response */
        $response = $client->get("https://blockchain.info/ticker");

        // todo dto
        $phpArr = json_decode($response->getBody()->getContents(), true);
        $usdPrice = $phpArr['USD']['last'];
        $content = loadView(__DIR__."/../../app/views/ticker.php", [
            'ticker' => $phpArr
        ]);
        $r = new Response($content);
        $r->setTitle("BTCUSD: ".$usdPrice);
        $this->layout = "some other layout";
        return $r;
    }
}