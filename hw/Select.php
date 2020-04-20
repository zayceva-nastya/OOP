<?php
class Select extends Form
{
    private $option;
    private $arselect;
    private $aroption;

    public function arselect(array $arselect)
    {
        $str = "";
        foreach ($arselect as $key => $value) {
            $str .= "$key='$value'";
        }
        return $this->arselect = $str;
    }

    public function aroption(array $aroption)
    {
        $str = "";
        foreach ($aroption as $key => $value) {
            $str .= "$key='$value'";
        }
        return $this->aroption = $str;
    }

    public function option(array $option)
    {
        $str = "";
        foreach ($option as $key => $value) {
            $str .= "<option>$value</option>\n";
        }
        return $this->option = $str;
    }

    public function select_()
    {
        return "<select $this->arselect> $this->option </option></select>";
    }
}
