<?php

class JsonFile extends File implements FileInterface
{
     
    public function save(array $data): object
    {
        file_put_contents($this->fileName, json_encode($data));
        return $this;
    }
    public function load(): array
    {
        return (array)json_decode(file_get_contents($this->fileName));//значение справа будет преобразовано в массив
     
    }
}
