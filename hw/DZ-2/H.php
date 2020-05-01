<?php
class H extends PairTag
{
    private $level;

    public function setLevel(int $level)

    {

        if ($level >= 1 && $level <= 6) {

            $this->level = $level;
        } elseif ($level > 6) {

            $this->level = 6;
        } elseif ($level < 1) {

            $this->level = 1;
        }

        return $this;
    }


    public function html()

    {
        return "<h$this->level id='$this->id' class='$this->class' 
        style='$this->style'>$this->innerText</h$this->level>";
    }
}
