<?php

class Form
{
    protected $method;
    protected $action;

    public function method(string $method): self
    {
        $this->method = "method='$method'";
        return $this;
    }
    public function action(string $action): self
    {
        $this->action = " action='$action'";
        return $this;
    }
    public function html()
    {
        return "<form $this->action $this->method></form>";
    }
}