<?php

class Area extends Tictac
{
    public function style(string $style): self
    {
        $this->style = " style='$style'";
        return $this;
    }

    public function show(array $map)
    {
        $str = "";

        foreach ($map  as $row => $value) {
            $str .= "<tr>";
            foreach ($value  as  $ke => $value) {
                // $str .= "<td>$value</td>";
                if ($value === 1) {
                    $str .= "<td $this->style>❌</td>";
                }
                if ($value === 0) {
                    $str .= "<td $this->style>⭕️</td>";
                }
                if ($value === Null) {
                    $str .= "<td $this->style></td>";
                }
            }
            $str .= "</tr>";
        }


        $this->show = $str;
        return $this;
    }
    public function html()
    {
        return "<table>$this->show</table>";
    }
}
