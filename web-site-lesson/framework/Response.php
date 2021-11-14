<?php

class Response
{
    private string $content;
    private string $layoutPath;
    private string $title;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
     
    }

    public function render()
    {
        echo loadView($this->layoutPath, [
            'content' => $this->content,
            'title' => $this->title
        ]);
    }

    public function setLayoutPath($path) {
        $this->layoutPath = $path;
    }
    // public function getLayoutPath():string {
    //     return $this->layoutPath;
    // }
    public function LayoutPathisNull():bool {
       return empty($this->layoutPath);
    }

}