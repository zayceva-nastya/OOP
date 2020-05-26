<?php

namespace Model;

interface CRUDInterface
{
    /**
     * чтение данных из бд
     */
    public function get(): array;
    /**
     * создание
     */
    public function add(array $data): int; //номер строки
    /**
     * edit
     */
    public function edit(int $id, array $data);

    /**
     * delete
     */
    public function dell(int $id);
}
