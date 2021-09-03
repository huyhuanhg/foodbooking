<?php

namespace App\Repositories\Interfaces;

interface OrderInterface
{
    public function getTotalCount();
    public function getStores(int $limit);
}
