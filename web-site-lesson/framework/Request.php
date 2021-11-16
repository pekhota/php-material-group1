<?php

namespace Framework;

class Request
{
    private string $scheme;
    private string $host;
    private int    $port;
    private string $user;
    private string $pass;
    private string $path;
    private string $query;
    private string $fragment;

    private string $method;

    private array $headers;
    private array $get;
    private array $post;
    private array $input;

    public function __construct()
    {

    }

    public static function capture() {
        $parsedUrl = parse_url(
            sprintf("%s://%s%s", $_SERVER['REQUEST_SCHEME'], $_SERVER['HTTP_HOST'], $_SERVER['REQUEST_URI'])
        );

        $req = new Request();

        $req->setMethod($_SERVER['REQUEST_METHOD']);

        $req->setGet($_GET);
        $req->setPost($_POST);
        $req->setInput(array_merge($_GET, $_POST));
        $req->setHeaders(getallheaders());

        $req->setScheme($parsedUrl['scheme']);
        $req->setHost($parsedUrl['host']);
        $req->setPort($parsedUrl['port']);
//        $req->setUser(@$parsedUrl['user']);
//        $req->setPass(@$parsedUrl['pass']);
        $req->setPath($parsedUrl['path']);
//        $req->setQuery($parsedUrl['query']);
//        $req->setFragment($parsedUrl['fragment']);

        return $req;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    /**
     * @return string
     */
    public function getScheme(): string
    {
        return $this->scheme;
    }

    /**
     * @param string $scheme
     */
    public function setScheme(string $scheme): void
    {
        $this->scheme = $scheme;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost(string $host): void
    {
        $this->host = $host;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * @param int $port
     */
    public function setPort(int $port): void
    {
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser(string $user): void
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getPass(): string
    {
        return $this->pass;
    }

    /**
     * @param string $pass
     */
    public function setPass(string $pass): void
    {
        $this->pass = $pass;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * @param string $query
     */
    public function setQuery(string $query): void
    {
        $this->query = $query;
    }

    /**
     * @return string
     */
    public function getFragment(): string
    {
        return $this->fragment;
    }

    /**
     * @param string $fragment
     */
    public function setFragment(string $fragment): void
    {
        $this->fragment = $fragment;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers): void
    {
        $this->headers = $headers;
    }

    /**
     * @return array
     */
    public function getGet(): array
    {
        return $this->get;
    }

    /**
     * @param array $get
     */
    public function setGet(array $get): void
    {
        $this->get = $get;
    }

    public function post(string $path, $default = null)
    {
        return Arr::wrap($this->post)->get($path, $default);
    }

    /**
     * @param array $post
     */
    public function setPost(array $post): void
    {
        $this->post = $post;
    }

    /**
     * @return array
     */
    public function getInput(): array
    {
        return $this->input;
    }

    /**
     * @param array $input
     */
    public function setInput(array $input): void
    {
        $this->input = $input;
    }
}