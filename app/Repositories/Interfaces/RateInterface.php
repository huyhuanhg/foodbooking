<?php

namespace App\Repositories\Interfaces;


interface RateInterface
{
    public function create(int $storeId, int $rateIndex);
    public function getAvgRate(int $storeId);
}
