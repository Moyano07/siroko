<?php

declare(strict_types=1);

class Product
{

    public function __construct
    (
        private string $uuid,
        private string $type,
        private string $size,
        private int $amount,
        private DateTime $creareAt,
        private DateTime $updateAt,
    )
    {
    }
}