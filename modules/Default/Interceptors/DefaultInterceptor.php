<?php

namespace Modules\Default\Interceptors;

use Pano\Core\BaseCommand;
use Pano\Core\BaseInterceptor;
use Pano\Core\BaseResponse;
use Pano\Enum\ResultCode;
use Pano\Foundation\Exception;
use Pano\Foundation\Response;

class DefaultInterceptor extends BaseInterceptor
{
    public function onRequest(): void
    {
    }

    public function onResponse(BaseResponse $response): BaseResponse
    {
        return parent::onResponse($response);
    }

}