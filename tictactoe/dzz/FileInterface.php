<?php

interface FileInterface
{
    public function save(array $data): object;
    public function load(): array;
}
