<?php

namespace Zan\Framework\Network\Http\Response;

use Exception;
use ArrayObject;
use JsonSerializable;
use Zan\Framework\Contract\Foundation\Jsonable;
use Zan\Framework\Contract\Network\Response as ResponseContract;
use Zan\Framework\Utilities\Types\Json;

class Response extends BaseResponse implements ResponseContract
{
    use ResponseTrait;

    /**
     * The original content of the response.
     *
     * @var mixed
     */
    public $original;

    /**
     * The exception that triggered the error response (if applicable).
     *
     * @var \Exception
     */
    public $exception;

    /**
     * Set the content on the response.
     *
     * @param  mixed  $content
     * @return $this
     */
    public function setContent($content)
    {

    }

    /**
     * Get the original response content.
     *
     * @return mixed
     */
    public function getOriginalContent()
    {

    }

    /**
     * Set the exception to attach to the response.
     *
     * @param  \Exception  $e
     * @return $this
     */
    public function withException(Exception $e)
    {

    }

    public function getException()
    {

    }
}
