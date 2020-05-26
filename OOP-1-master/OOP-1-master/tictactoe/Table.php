<?php
class Table
{
    protected $table;
    protected $style;
    protected $data;

    public function __construct()
    {
        $this->clear();
    }

    public function clear(): self
    {
        $this->style = '';
        $this->data = '';
        return $this;
    }

    public function style(string $style): self
    {
        $this->style = " style='$style'";
        return $this;
    }

    public function data(array $data): self
    {
        $str = "";

        foreach ($data as $row) {
            $str .= "<tr>";
            foreach ($row as $cell) {
                $str .= "<td>$cell</td>";
            }
            $str .= "</tr>";
        }

        $this->data = $str;
        return $this;
    }
    public function html()
    {
        return "<table$this->style>$this->data</table>";
    }
}