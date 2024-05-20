<?php

namespace Core\Routing;

class Route
{
    private HttpMethod $httpMethod;
    private string $pattern;
    private string $controllerClass;
    private string $actionMethod;
    private array $args = [];

    /**
     * @param HttpMethod $httpMethod
     * @param string $pattern
     * @param string $controllerClass
     * @param string $actionMethod
     */
    public function __construct(HttpMethod $httpMethod, string $pattern, string $controllerClass, string $actionMethod)
    {
        $this->httpMethod = $httpMethod;
        $this->pattern = $pattern;
        $this->controllerClass = $controllerClass;
        $this->actionMethod = $actionMethod;
    }

    public function getHttpMethod(): HttpMethod
    {
        return $this->httpMethod;
    }

    public function getPattern(): string
    {
        return $this->pattern;
    }

    public function setArgs(array $args): void
    {
        $this->args = $args;
    }

    public function execute(): void {

    }
}

