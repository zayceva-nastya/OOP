<?php

class Form extends PairTag
{
    private $action;
    private $method = "GET";
    private $content;

    public function setAction(string $action)
    {
        $this->action = $action;
        return $this;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
        return $this;
    }

    public function addContent(string $content)
    {
        $this->content .= $content;
        return $this;
    }

    public function setMethod($method)
    {
        if (in_array($method, ["POST", "GET"])) {
            $this->method = $method;
        }
        return $this;
    }

    
    public function html()
    {
        return "<form action='$this->action' method='$this->method'>\n$this->content</form>";
    }
}
