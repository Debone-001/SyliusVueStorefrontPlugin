<?php


namespace BitBag\SyliusVueStorefrontPlugin\Sylius\Transformer\SyliusProduct;

use BitBag\SyliusVueStorefrontPlugin\Document\Product\ConfigurableAttribute;
use Sylius\Component\Core\Model\ProductInterface;

interface ProductAttributesTransformerInterface
{
    public function transform(ProductInterface $product): ConfigurableAttribute ;
}