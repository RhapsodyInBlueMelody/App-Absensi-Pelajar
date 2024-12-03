<?php

class App
{
    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();

        if (
            is_array($url) &&
            isset($url[0]) &&
            file_exists("../src/controllers/" . $url[0] . ".php")
        ) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once "../src/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller();

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        //Params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        //Run Controller & Method, send to  params if exist
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET["url"])) {
            return array_values(
                array_filter(
                    explode(
                        "/",
                        filter_var(
                            rtrim($_GET["url"] ?? "", "/"),
                            FILTER_SANITIZE_URL
                        )
                    ),
                    fn($segment) => $segment !== "" && $segment !== "public"
                )
            );
        }

        return [];
    }
}
