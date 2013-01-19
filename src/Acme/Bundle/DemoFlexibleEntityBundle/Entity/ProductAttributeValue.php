<?php
namespace Acme\Bundle\DemoFlexibleEntityBundle\Entity;

use Oro\Bundle\FlexibleEntityBundle\Entity\Mapping\AbstractEntityFlexibleValue;
use Doctrine\ORM\Mapping as ORM;

/**
 * Value for a product attribute
 *
 * @author    Nicolas Dupont <nicolas@akeneo.com>
 * @copyright 2012 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/MIT MIT
 *
 * @ORM\Table(name="acmedemoflexibleentity_product_attribute_value")
 * @ORM\Entity
 */
class ProductAttributeValue extends AbstractEntityFlexibleValue
{
    /**
     * @var Oro\Bundle\FlexibleEntityBundle\Entity\Attribute $attribute
     *
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\FlexibleEntityBundle\Entity\Attribute")
     */
    protected $attribute;

    /**
     * @var Product $entity
     *
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="values")
     */
    protected $entity;

    /**
     * Store option value, if backend is an option
     *
     * @var Oro\Bundle\FlexibleEntityBundle\Entity\AttributeOption $option
     *
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\FlexibleEntityBundle\Entity\AttributeOption")
     */
    protected $option;
}
