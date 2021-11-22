<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class MainController
{
    public function main() {
        return view('main');
    }

    public function ticker2() {
        echo (new \DateTime())->format(DATE_RFC7231);
    }
}
