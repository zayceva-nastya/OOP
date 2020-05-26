<?php

abstract class File
{
    protected $filename;
    public function __construct(string $filename = '')
    {
        if (!empty($filename)) {
            $this->setFileName($filename);
        }
    }

    public function setFileName(string $filename)
    {
        $this->fileName = $filename;
    }
}