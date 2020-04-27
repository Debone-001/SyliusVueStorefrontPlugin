<?php

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Sylius\Transformer\SyliusProduct;

use BitBag\SyliusVueStorefrontPlugin\Document\Product\Review;
use Sylius\Component\Review\ModelReviewableProductInterface;

interface ProductReviewTransformerInterface
{
    public function transform(ReviewableProductInterface $syliusProduct): Review;
}