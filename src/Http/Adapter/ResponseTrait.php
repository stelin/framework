<?php

namespace Swoft\Http\Adapter;

use Swoft\App;
use Swoft\Http\Message\Base\Response as BaseResponse;
use Swoft\Testing\Base\Response as TestingBaseResponse;

trait ResponseTrait
{

    /**
     * @return BaseResponse|TestingBaseResponse
     */
    protected function createResponse()
    {
        return App::$isInTest ? new TestingBaseResponse() : new BaseResponse();
    }
}
