<?php

class Area
{
    private $map;
    private $style = " style='border: 1px black solid'";
    private $class = " class = 'tictac'";


    public function setMap(array $map)
    {
        $this->map = $map;
        return $this;
    }


    public function style(string $style): self
    {
        $this->style = $style;
        return $this;
    }



    public function class(string $class): self
    {
        $this->class = $class;
        return $this;
    }

    public function html()
    {

        $str = "<table$this->style$this->class>\n";
        foreach ($this->map  as $i => $value) {
            $str .= "\t<tr>\n";
            foreach ($value  as  $j => $value) {
                // $str .= "<td>$value</td>";
                $mark = '';
                if ($value === 1) {
                    $mark = "❌";
                } else if ($value === 0) {
                    $mark = "⭕️";
                } else if ($value === null) {
                    $mark = "<a href='?action=shot&i=$i&j=$j'>___</a>";
                }
                $str .= "\t\t<td$this->style>$mark</td>\n";
            }
            $str .= "</tr>\n";
        }
        $str .= "</table>";


        return $str;
    }
}
