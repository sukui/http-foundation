<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zan\Framework\Network\Http\Request\AcceptHeader;

/**
 * Represents an Accept-* header item.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class AcceptHeaderItem
{

    /**
     * Constructor.
     *
     * @param string $value
     * @param array  $attributes
     */
    public function __construct($value, array $attributes = array())
    {

    }

    /**
     * Builds an AcceptHeaderInstance instance from a string.
     *
     * @param string $itemValue
     *
     * @return AcceptHeaderItem
     */
    public static function fromString($itemValue)
    {

    }

    /**
     * Returns header  value's string representation.
     *
     * @return string
     */
    public function __toString()
    {

    }

    /**
     * Set the item value.
     *
     * @param string $value
     *
     * @return AcceptHeaderItem
     */
    public function setValue($value)
    {

    }

    /**
     * Returns the item value.
     *
     * @return string
     */
    public function getValue()
    {

    }

    /**
     * Set the item quality.
     *
     * @param float $quality
     *
     * @return AcceptHeaderItem
     */
    public function setQuality($quality)
    {

    }

    /**
     * Returns the item quality.
     *
     * @return float
     */
    public function getQuality()
    {

    }

    /**
     * Set the item index.
     *
     * @param int $index
     *
     * @return AcceptHeaderItem
     */
    public function setIndex($index)
    {

    }

    /**
     * Returns the item index.
     *
     * @return int
     */
    public function getIndex()
    {

    }

    /**
     * Tests if an attribute exists.
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasAttribute($name)
    {

    }

    /**
     * Returns an attribute by its name.
     *
     * @param string $name
     * @param mixed  $default
     *
     * @return mixed
     */
    public function getAttribute($name, $default = null)
    {

    }

    /**
     * Returns all attributes.
     *
     * @return array
     */
    public function getAttributes()
    {

    }

    /**
     * Set an attribute.
     *
     * @param string $name
     * @param string $value
     *
     * @return AcceptHeaderItem
     */
    public function setAttribute($name, $value)
    {

    }
}
