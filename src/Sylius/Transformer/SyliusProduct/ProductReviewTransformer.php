<?php

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Sylius\Transformer\SyliusProduct;

use BitBag\SyliusVueStorefrontPlugin\Document\Product\Review;
use Sylius\Component\Review\ModelReviewableProductInterface;

class ProductReviewTransformer implements ProductReviewTransformerInterface
{
    public function transform(ReviewableProductInterface $syliusProduct): Review
    {
        return new Review($syliusProduct->getAverageRating());
    }
}