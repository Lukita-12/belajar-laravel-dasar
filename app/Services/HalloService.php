<?php

namespace App\Services;

interface HalloService
{
    function hallo(string $name): string;
}