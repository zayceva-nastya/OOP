<?php

class Tictac
{
    public $map = [];

    public function __construct(int $n = 3)
    {
        $this->initMap($n);
    }

    public function initMap(int $n)
    {
        $this->map = [];

        for ($i = 0; $i < $n; $i++) {

            $row = [];

            for ($j = 0; $j < $n; $j++) {
                $row[] = null;
            }

            $this->map[] = $row;
        }
        return $this;
    }

    public function putCross(int $i, int $j)
    {
        if ($this->available($i, $j)) {
            $this->map[$i][$j] = 1;
        }
        return $this;
    }

    public function putNull(int $i, int $j)
    {
        if ($this->available($i, $j)) {
            $this->map[$i][$j] = 0;
        }
        return $this;
    }

    public function available(int $i, int $j): bool
    {
        $av = false;

        if ($i >= 0 && $i < count($this->map)) {
            if ($j >= 0 && $j < count($this->map[0])) {
                if ($this->map[$i][$j]  === null) {
                    $av = true;
                }
            }
        }

        return $av;
    }
}