<?php

namespace Me\MyScribePlugin\Strategies;

use Illuminate\Routing\Route;
use Knuckles\Scribe\Extracting\ParamHelpers;
use Knuckles\Scribe\Extracting\RouteDocBlocker;
use Knuckles\Scribe\Extracting\Strategies\Strategy;
use ReflectionClass;
use ReflectionFunctionAbstract;

class MyStrategy extends Strategy
{
    /**
     * The stage the strategy belongs to.
     * One of "metadata", "urlParameters", "queryParameters", "bodyParameters", "headers", "responses", "responseFields".
     */
    public $stage = 'queryParameters';

    /**
     * Trait containing some helper methods for dealing with "parameters".
     * Useful if your strategy extracts information about parameters.
     */
    use ParamHelpers;

    /**
     * @link https://scribe.readthedocs.io/en/latest/plugins.html
     *
     * @param Route $route The route which we are currently extracting queryParameters for.
     * @param ReflectionClass $controller The class handling the current route.
     * @param ReflectionFunctionAbstract $method The method/closure handling the current route.
     * @param array $routeRules Array of rules for the ruleset which this route belongs to.
     * @param array $alreadyExtractedData  Data already extracted from previous stages and earlier strategies in this stage
     *
     * See the documentation linked above for more details about writing custom strategies.
     *
     * @return array|null
     */
    public function __invoke(
        Route $route,
        ReflectionClass $controller,
        ReflectionFunctionAbstract $method,
        array $routeRules,
        array $alreadyExtractedData = []
    )
    {

        return $this->getData($route, $controller, $method);
    }

    public function getData(Route $route, ReflectionClass $controller, ReflectionFunctionAbstract $method)
    {
        //

        return null;
    }

}
