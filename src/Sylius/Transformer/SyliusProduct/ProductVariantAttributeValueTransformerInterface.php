<?php


namespace BitBag\SyliusVueStorefrontPlugin\Sylius\Transformer\SyliusProduct;

use BitBag\SyliusVueStorefrontPlugin\Document\Product\ConfigurableChildrenAttribute;
use Sylius\Component\Core\Model\ProductVariantInterface;

interface ProductVariantAttributeValueTransformerInterface
{
    public function transform(ProductVariantInterface $syliusProductVariants): ConfigurableChildrenAttribute;
}