<?php

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Document\Product;

class Review
{
    private const AVERAGE_RATING = 'average_rating';

    /** @var float */
    private $average;

    public function __construct(float $average)
    {
        $this->average = $average;
    }

    public function toArray(): array
    {
        return [
            self::AVERAGE_RATING => $this->average,
        ];
    }
}