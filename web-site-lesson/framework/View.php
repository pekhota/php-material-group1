<?php

namespace Framework;

class View
{
    private string $layoutPath;
    private string $viewPath;

    /**
     * @param string $layoutPath
     * @param string $viewPath
     */
    public function __construct(string $layoutPath, string $viewPath)
    {
        $this->layoutPath = $layoutPath;
        $this->viewPath = $viewPath;
    }


    public function load(string $path, array $params = null) {
        $this->viewPath.$path;
        if (!empty($params)) {
            extract($params);
        }
        ob_start();
        require_once $path;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

}

