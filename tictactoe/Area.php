<?php

class Area
{
    private $map;

    public function setMap(array $map)
    {
        $this->map = $map;
        return $this;
    }

    public function style(string $style): self
    {
        $this->style = " style='$style'";
        return $this;
    }

    public function html()
    {
        $str = "<table$this->style>";

        foreach ($this->map  as $row => $value) {
            $str .= "<tr>";
            foreach ($value  as  $key => $value) {
                // $str .= "<td>$value</td>";
                $mark = '';
                if ($value === 1) {
                    $mark = "❌";
                } else if ($value === 0) {
                    $mark = "⭕️";
                }
                $str .= "<td$this->style>$mark</td>";
            }
            $str .= "</tr>";
        }
        $str .= "</table>";


        return $str;
    }
}
