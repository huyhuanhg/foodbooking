<?php

namespace App\Repositories\Interfaces;


interface RateInterface
{
    public function getList(string $timezone, int $page, int $limit);

    public function create(int $storeId, int $rateIndex);

    public function getAvgRate(int $storeId);
}
