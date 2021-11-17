<?php

class PricingController extends AbstractController
{
    public function index(): Response
    {

        $content = loadView(__DIR__ . "/../../app/views/pricing.php", [
        ]);

        $r = new Response($content);
        $r->setTitle("Pricing page");
        return $r;
    }
}