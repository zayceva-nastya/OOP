<?php

namespace View;

class View
{
    private $layout;
    private $template;
    private $path;
    private $data;

    public function __construct()
    {
        $this->path = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']) . '/../templates/';
    }

    public function setLayout(string $layout)
    {
        $this->layout = $layout;
        return $this;
    }

    public function setTemplate(string $template)
    {
        $this->template = $template;
        return $this;
    }

    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }

    public function view()
    {
        include "$this->path$this->layout.php";
    }

    public function body()
    {
        extract($this->data);
        include "$this->path$this->template.php";
    }
}