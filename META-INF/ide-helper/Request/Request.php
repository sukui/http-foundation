<?php

namespace Zan\Framework\Network\Http\Request;

use swoole_http_request as SwooleHttpRequest;
use Zan\Framework\Contract\Foundation\Arrayable;
use Zan\Framework\Contract\Network\Request as RequestContract;

class Request extends BaseRequest implements Arrayable, RequestContract
{

    /**
     * Create a new HTTP request from swoole http request.
     *
     * @return static
     */
    public static function createFromSwooleHttpRequest(SwooleHttpRequest $swooleRequest)
    {

    }

    /**
     * Generates a normalized URI (URL) for the Request.
     *
     * @return string A normalized URI (URL) for the Request
     *
     * @see getQueryString()
     */
    public function getUri()
    {

    }

    /**
     * Get the root URL for the application.
     *
     * @return string
     */
    public function getUrlRoot()
    {

    }

    /**
     * Get the URL (no query string) for the request.
     *
     * @return string
     */
    public function getUrl()
    {

    }

    /**
     * Get the full URL for the request.
     *
     * @return string
     */
    public function getFullUrl()
    {

    }

    /**
     * Get the full URL for the request with the added query string parameters.
     *
     * @param  array  $query
     * @return string
     */
    public function getFullUrlWithAddedQuery(array $query)
    {

    }

    /**
     * Get the current path info for the request.
     *
     * @return string
     */
    public function getPath()
    {

    }

    /**
     * Get the current encoded path info for the request.
     *
     * @return string
     */
    public function getDecodedPath()
    {

    }

    /**
     * Get a segment from the URI (1 based index).
     *
     * @param  int  $index
     * @param  string|null  $default
     * @return string|null
     */
    public function getSegment($index, $default = null)
    {

    }

    /**
     * Get all of the segments for the request path.
     *
     * @return array
     */
    public function getSegments()
    {

    }

    /**
     * Determine if the current request URI matches a pattern.
     *
     * @param  mixed  string
     * @return bool
     */
    public function is()
    {

    }

    /**
     * Determine if the current request URL and query string matches a pattern.
     *
     * @param  mixed  string
     * @return bool
     */
    public function isFullUrlMatch()
    {

    }

    /**
     * Determine if the request is the result of an AJAX call.
     *
     * @return bool
     */
    public function isAjax()
    {

    }

    /**
     * Determine if the request is the result of an PJAX call.
     *
     * @return bool
     */
    public function isPjax()
    {

    }

    /**
     * Determine if the request contains a given input item key.
     *
     * @param  string|array  $key
     * @return bool
     */
    public function exists($key)
    {

    }

    /**
     * Determine if the request contains a non-empty value for an input item.
     *
     * @param  string|array  $key
     * @return bool
     */
    public function has($key)
    {

    }

    /**
     * Determine if the given input key is an empty string for "has".
     *
     * @param  string  $key
     * @return bool
     */
    protected function isEmptyString($key)
    {

    }

    /**
     * Get all of the input and files for the request.
     *
     * @return array
     */
    public function all()
    {

    }

    /**
     * Retrieve an input item from the request.
     *
     * @param  string  $key
     * @param  string|array|null  $default
     * @return string|array
     */
    public function input($key = null, $default = null)
    {

    }

    /**
     * Get a subset of the items from the input data.
     *
     * @param  array|mixed  $keys
     * @return array
     */
    public function only($keys)
    {

    }

    /**
     * Get all of the input except for a specified array of items.
     *
     * @param  array|mixed  $keys
     * @return array
     */
    public function except($keys)
    {

    }

    /**
     * Retrieve a query string item from the request.
     *
     * @param  string  $key
     * @param  string|array|null  $default
     * @return string|array
     */
    public function get($key = null, $default = null)
    {

    }

    /**
     * Retrieve a post string item from the request.
     *
     * @param  string  $key
     * @param  string|array|null  $default
     * @return string|array
     */
    public function post($key = null, $default = null)
    {

    }

    /**
     * Determine if a cookie is set on the request.
     *
     * @param  string  $key
     * @return bool
     */
    public function hasCookie($key)
    {

    }

    /**
     * Retrieve a cookie from the request.
     *
     * @param  string  $key
     * @param  string|array|null  $default
     * @return string|array
     */
    public function cookie($key = null, $default = null)
    {

    }

    /**
     * Retrieve a header from the request.
     *
     * @param  string  $key
     * @param  string|array|null  $default
     * @return string|array
     */
    public function header($key = null, $default = null)
    {

    }

    /**
     * Retrieve a server variable from the request.
     *
     * @param  string  $key
     * @param  string|array|null  $default
     * @return string|array
     */
    public function server($key = null, $default = null)
    {

    }

    /**
     * Merge new input into the current request's input array.
     *
     * @param  array  $input
     * @return void
     */
    public function merge(array $input)
    {

    }

    /**
     * Replace the input for the current request.
     *
     * @param  array  $input
     * @return void
     */
    public function replace(array $input)
    {

    }

    /**
     * Get the JSON payload for the request.
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    public function json($key = null, $default = null)
    {

    }

    /**
     * Determine if the given content types match.
     *
     * @param  string  $actual
     * @param  string  $type
     * @return bool
     */
    public static function matchesType($actual, $type)
    {

    }

    /**
     * Determine if the request is sending JSON.
     *
     * @return bool
     */
    public function isJson()
    {

    }

    /**
     * Determine if the current request is asking for JSON in return.
     *
     * @return bool
     */
    public function wantsJson()
    {

    }

    /**
     * Determines whether the current requests accepts a given content type.
     *
     * @param  string|array  $contentTypes
     * @return bool
     */
    public function accepts($contentTypes)
    {

    }

    /**
     * Return the most suitable content type from the given array based on content negotiation.
     *
     * @param  string|array  $contentTypes
     * @return string|null
     */
    public function prefers($contentTypes)
    {

    }

    /**
     * Determines whether a request accepts JSON.
     *
     * @return bool
     */
    public function acceptsJson()
    {

    }

    /**
     * Determines whether a request accepts HTML.
     *
     * @return bool
     */
    public function acceptsHtml()
    {

    }

    /**
     * Get the bearer token from the request headers.
     *
     * @return string|null
     */
    public function bearerToken()
    {

    }

    /**
     * Returns the request body content.
     *
     * @param bool $asResource
     * @return string The request body content.
     *
     */
    public function getContent($asResource = false)
    {

    }

    public function getRoute()
    {

    }

    public function setRoute($route)
    {

    }

    /**
     * Get all of the input and files for the request.
     *
     * @return array
     */
    public function toArray()
    {

    }
}