<?php

declare(strict_types=1);

class Trolley
{

    public function __construct
    (
        private string $uuid,
        private int $totalPrice,
        private DateTime $creareAt,
        private DateTime $updateAt,
        private array $products =[]
    )
    {
    }
}