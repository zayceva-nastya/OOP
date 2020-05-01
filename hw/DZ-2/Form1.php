<?php

class Form1 extends Tag {
    private $action;
    private $method;
    private $formData;
    private $cols;
    private $rows;
    private $content;

    public function setAction($action) {
        $this->action = $action;
        return $this;
    }

    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    public function setMethod($method) {
        $this->method = $method;
        return $this;
    }

    public function setCols($cols) {
        $this->cols = $cols;
        return $this;
    }

    public function setRows($rows) {
        $this->rows = $rows;
        return $this;
    }

    public function setFormData($formData) {
        $this->formData = "";

        foreach ($formData as $key => $value) {

            if ($value == "textarea" || $value == "button") {
                if ($value == "textarea") {
                    $this->formData .= "\t<$value type='$key' cols='$this->cols' rows='$this->rows'></$value>\n";
                } else {
                    $this->formData .= "\t<$value type='$key'>$this->content</$value>\n";
                }
                
            }else {
                $this->formData .= "\t<$value type='$key'>\n";
            }
        }

        return $this;
    }

    public function html() {
        return "<form action='$this->action' method='$this->method'>\n$this->formData</form>";
    }

}