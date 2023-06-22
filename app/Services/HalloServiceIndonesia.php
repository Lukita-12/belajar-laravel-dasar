<?php

namespace App\Services;

class HalloServiceIndonesia implements HalloService
{
    public function hallo(string $name): string
    {
        return "Halo $name";
    }
}