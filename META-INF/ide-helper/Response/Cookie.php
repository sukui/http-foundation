<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zan\Framework\Network\Http\Response;

/**
 * Represents a cookie.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class Cookie
{

    /**
     * Constructor.
     *
     * @param string                                  $name     The name of the cookie
     * @param string                                  $value    The value of the cookie
     * @param int|string|\DateTime|\DateTimeInterface $expire   The time the cookie expires
     * @param string                                  $path     The path on the server in which the cookie will be available on
     * @param string                                  $domain   The domain that the cookie is available to
     * @param bool                                    $secure   Whether the cookie should only be transmitted over a secure HTTPS connection from the client
     * @param bool                                    $httpOnly Whether the cookie will be made accessible only through the HTTP protocol
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($name, $value = null, $expire = 0, $path = '/', $domain = null, $secure = false, $httpOnly = true)
    {

    }

    /**
     * Returns the cookie as a string.
     *
     * @return string The cookie
     */
    public function __toString()
    {

    }

    /**
     * Gets the name of the cookie.
     *
     * @return string
     */
    public function getName()
    {

    }

    /**
     * Gets the value of the cookie.
     *
     * @return string
     */
    public function getValue()
    {

    }

    /**
     * Gets the domain that the cookie is available to.
     *
     * @return string
     */
    public function getDomain()
    {

    }

    /**
     * Gets the time the cookie expires.
     *
     * @return int
     */
    public function getExpiresTime()
    {

    }

    /**
     * Gets the path on the server in which the cookie will be available on.
     *
     * @return string
     */
    public function getPath()
    {

    }

    /**
     * Checks whether the cookie should only be transmitted over a secure HTTPS connection from the client.
     *
     * @return bool
     */
    public function isSecure()
    {

    }

    /**
     * Checks whether the cookie will be made accessible only through the HTTP protocol.
     *
     * @return bool
     */
    public function isHttpOnly()
    {

    }

    /**
     * Whether this cookie is about to be cleared.
     *
     * @return bool
     */
    public function isCleared()
    {

    }
}
