<?php

/**
 * Искуственный интелект для игры в крестики нолики
 */
class Ai extends Tictac
{

    private FileInterface $saver;


    public function setSaver(FileInterface $saver) //внедряем зависимость через эту ф-ю(внедряем объект)
    {
        $this->saver = $saver;
        return $this;
    }

    private function putRand(string $method)
    {
        if ($this->checWin() === null) {
            $moves =   $this->searchEmptyCells();

            if (count($moves) > 1) {
                $move = $moves[random_int(0, count($moves) - 1)];
            } else {
                $move = $moves[0];
            }

            if (!empty($move)) {
                $this->{$method}($move['i'], $move['j']);
            }
        }
        return $this;
    }

    /**
     * Случайный ход крестиком
     */
    public function putRandCross()
    {
        return $this->putRand('putCross');
    }

    /**
     * Случайный ход ноликом
     */

    public function putRandNull()
    {
        return $this->putRand('putNull');
    }

    public function searchEmptyCells()
    {
        $moves = [];
        foreach ($this->map as $i => $row) {
            foreach ($row as $j => $cell) {
                if ($cell === null) {
                    $moves[] = ["i" => $i, "j" => $j];
                }
            }
        }
        return $moves;
    }

    /**
     * Игра компьютера самого с собой
     */

    public function selfGaming()
    {
        $mapSize = $this->mapSize() ** 2;
        $count = 0;
        while ($this->checWin() === null && $count < $mapSize) {
            $this->putRandNull();
            $this->putRandCross();

            $count++;
        }
    }

    public function saveMap()
    {
        if (!empty($this->getMap())) {
            $this->saver->save($this->getMap());
            // $_SESSION['map'] = $this->getMap();
        }

        return $this;
    }

    public function loadMap()
    {
        $data = $this->saver->load();
        if (!empty($data)) {
            $this->setMap($data);
        }

        return $this;
    }
}
