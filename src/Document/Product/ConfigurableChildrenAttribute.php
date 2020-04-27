<?php

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Document\Product;

use BitBag\SyliusVueStorefrontPlugin\Document\Product\ConfigurableAttributes\ProductVariantAttributes;

class ConfigurableChildrenAttribute
{
    private const CHILDREN_ATTRIBUTE = 'configurable_children_attribute';

    /** @var ProductVariantAttributes[] */
    private $childrenAttribute;

    public function __construct(array $childrenAttribute)
    {
        $this->childrenAttribute = $childrenAttribute;
    }

    public function toArray(): array
    {
        return [
            self::CHILDREN_ATTRIBUTE => $this->childrenAttribute,
        ];
    }
}