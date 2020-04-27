<?php


namespace BitBag\SyliusVueStorefrontPlugin\Document\Product\ConfigurableAttributes;


use BitBag\SyliusVueStorefrontPlugin\Document\Product\ConfigurableOptions\OptionValue;

class Attributes
{
    protected const ID = 'id';

    protected const VALUES = 'values';

    protected const LABEL = 'label';

    protected const POSITION = 'position';

    protected const ATTRIBUTE_CODE = 'attribute_code';

    /** @var int */
    protected $id;

    /** @var OptionValue[] */
    protected $values;

    /** @var string */
    protected $label;

    /** @var int */
    protected $position;

    /** @var string */
    protected $attributeCode;

    public function __construct(
        int $id,
        array $values,
        string $label,
        int $position,
        string $attributeCode
    ) {
        $this->id = $id;
        $this->values = $values;
        $this->label = $label;
        $this->position = $position;
        $this->attributeCode = $attributeCode;
    }

    public function jsonSerialize(): array
    {
        return [
            self::ID => $this->id,
            self::VALUES => $this->values,
            self::LABEL => $this->label,
            self::POSITION => $this->position,
            self::ATTRIBUTE_CODE => $this->attributeCode,
        ];
    }
}