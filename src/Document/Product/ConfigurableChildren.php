<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Document\Product;

use BitBag\SyliusVueStorefrontPlugin\Document\Product\ConfigurableChildren\Child;

class ConfigurableChildren
{
    private const CHILDREN = 'configurable_children';

    /** @var Child[] */
    private $children;

    public function __construct(array $children)
    {
        $this->children = $children;
    }

    public function toArray(): array
    {
        return [
            self::CHILDREN => $this->children,
        ];
    }
}
