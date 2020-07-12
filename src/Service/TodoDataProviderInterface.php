<?php

namespace Service;

use Model\Todo;

interface TodoDataProviderInterface
{
    public function find(int $id): ?Todo;

    /**
     * @return Todo[]|array
     */
    public function list(): array;
    
    public function save(?int $id, string $title, string $description): Todo;
}