<?php

class IniFile extends File implements FileInterface 
{
   
    public function save(array $data): object
    {
        $ini = '';

        foreach ($data as $key => $value) {
            $ini .= "$key = $value\n";
        }

        file_put_contents($this->fileName, $ini);
        return $this;
    }

    public function load(): array
    {
        return parse_ini_file($this->fileName);
    }
}
