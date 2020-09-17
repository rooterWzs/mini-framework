<?php


namespace Wzs\Main;


class Request implements RequestInterface
{
    protected $url;
    protected $method;
    protected $headers;

    public function __construct($uri, $method, $headers)
    {
        $this->url = $uri;
        $this->method = $method;
        $this->headers = $headers;
    }

    public static function create($uri, $method, $headers)
    {
        // TODO: Implement create() method.
        return new static($uri, $method, $headers); // new 自己
    }

    public function getUri()
    {
        // TODO: Implement getUri() method.
        return $this->url;
    }

    public function getMethod()
    {
        // TODO: Implement getMethod() method.
        return $this->method;
    }

    public function getHeader()
    {
        // TODO: Implement getHeader() method.
        return $this->headers;
    }
}