<?php

namespace Core\Routing;

enum HttpMethod: string
{
    case GET = 'GET';
    case POST = 'POST';
}