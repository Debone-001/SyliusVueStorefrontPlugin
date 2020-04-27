<?php

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Document\Product;

use BitBag\SyliusVueStorefrontPlugin\Document\Product\ConfigurableAttributes\ProductAttributes;

class ConfigurableAttribute
{
    private const ATTRIBUTE = 'configurable_attributes';

    /** @var ProductAttributes[] */
    private $attributes;

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function toArray(): array
    {
        return [
            self::ATTRIBUTE => $this->attributes,
        ];
    }
}