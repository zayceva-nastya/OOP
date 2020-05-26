<?php

class PHPFile extends File implements FileInterface
{
    public function save(array $data): object
    {
        file_put_contents($this->fileName, "<?php return " . var_export($data, true) . ";");
        return $this;
    }

    public function load(): array
    {
        return array (include($this->fileName));
    }
}