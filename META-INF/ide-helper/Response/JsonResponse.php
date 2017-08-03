<?php

namespace Zan\Framework\Network\Http\Response;

use JsonSerializable;
use InvalidArgumentException;
use Zan\Framework\Contract\Foundation\Jsonable;
use Zan\Framework\Contract\Foundation\Arrayable;
use Zan\Framework\Contract\Network\Response as ResponseContract;

class JsonResponse extends BaseJsonResponse implements ResponseContract
{
    use ResponseTrait;

    /**
     * Constructor.
     *
     * @param  mixed  $data
     * @param  int    $status
     * @param  array  $headers
     * @param  int    $options
     */
    public function __construct($data = null, $status = 200, $headers = [], $options = 0)
    {

    }

    /**
     * Get the json_decoded data from the response.
     *
     * @param  bool  $assoc
     * @param  int   $depth
     * @return mixed
     */
    public function getData($assoc = false, $depth = 512)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function setData($data = [])
    {

    }

    /**
     * Get the JSON encoding options.
     *
     * @return int
     */
    public function getJsonOptions()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function setEncodingOptions($encodingOptions)
    {

    }

    /**
     * Set the JSON encoding options.
     *
     * @param  int  $options
     * @return mixed
     */
    public function setJsonOptions($options)
    {

    }
}
