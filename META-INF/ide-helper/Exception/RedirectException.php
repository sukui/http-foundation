<?php

namespace Zan\Framework\Network\Http\Exception;


use Zan\Framework\Foundation\Exception\BusinessException;

class RedirectException extends BusinessException
{
    public $redirectUrl;

    public function __construct($url, $message)
    {

    }

    /**
     * @return mixed
     */
    public function getRedirectUrl()
    {

    }

    /**
     * @param mixed $redirectUrl
     */
    public function setRedirectUrl($redirectUrl)
    {

    }


}

