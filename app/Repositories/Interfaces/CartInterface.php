<?php

namespace App\Repositories\Interfaces;

interface CartInterface
{
    public function getTotalCount();
    public function getStores(int $limit);
}
