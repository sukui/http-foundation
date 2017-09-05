<?php

namespace Zan\Framework\Network\Http\Response;

use ZanPHP\Contracts\Http\ResponseTrait;
use ZanPHP\Contracts\Network\Response as ResponseContract;

class InternalErrorResponse extends BaseResponse implements ResponseContract
{
    use ResponseTrait;
}