<?php

namespace BitBag\SyliusVueStorefrontPlugin\Sylius\Transformer\SyliusProduct;

use BitBag\SyliusVueStorefrontPlugin\Document\Product\ConfigurableAttribute;
use BitBag\SyliusVueStorefrontPlugin\Document\Product\ConfigurableAttributes\ProductAttributes;
use Sylius\Component\Core\Model\ProductInterface;
use Sylius\Component\Attribute\Model\AttributeValueInterface;

class ProductAttributesTransformer implements ProductAttributesTransformerInterface
{
    public function transform(ProductInterface $product): ConfigurableAttribute
    {
        $productAttributeValues = [];

        /**@var AttributeValueInterface $attributeValues */
        foreach($product->getAttributes() as $attributeValues)
        {
            $productAttributeValues[] = new ProductAttributes(
                $attributeValues->getId(),
                $attributeValues->getValue(),
                $attributeValues->getAttributes()->getName(),
                $attributeValues->getAttributes()->getPosition(),
                $attributeValues->getAttributes()->getCode()
            );
        }

        return new ConfigurableAttribute($productAttributeValues);
    }
}