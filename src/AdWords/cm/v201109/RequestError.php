<?php

namespace AdWords\cm\v201109;

use AdWords\cm\v201109\ApiError;


class RequestError extends ApiError
{
    /**
     * @var \AdWords\cm\v201109\RequestErrorReason
     */
    public $reason;
}