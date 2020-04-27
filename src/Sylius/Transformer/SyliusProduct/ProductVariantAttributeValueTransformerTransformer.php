<?php

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Sylius\Transformer\SyliusProduct;

use BitBag\SyliusVueStorefrontPlugin\Document\Product\ConfigurableAttributes\ProductVariantAttributes;
use BitBag\SyliusVueStorefrontPlugin\Document\Product\ConfigurableChildrenAttribute;
use Sylius\Component\Core\Model\ProductVariantInterface;

class ProductVariantAttributeValueTransformerTransformer implements ProductVariantAttributeValueTransformerInterface
{
    public function transform(ProductVariantInterface $syliusProductVariant): ConfigurableChildrenAttribute
    {
        $customAttributes = [];

        if (method_exists($syliusProductVariant, 'getAttributes')) {
            foreach ($syliusProductVariant->getAttributes() as $attributeValue) {
                $customAttributes[] = new ProductVariantAttributes (
                    $attributeValue->getId(),
                    $attributeValue->getValue(),
                    $attributeValue->getAttributes()->getName(),
                    $attributeValue->getAttributes()->getPosition(),
                    $attributeValue->getAttributes()->getCode()
                );
            }
        }

        return new ConfigurableChildrenAttribute($customAttributes);
    }
}