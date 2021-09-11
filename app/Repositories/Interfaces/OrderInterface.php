<?php

namespace App\Repositories\Interfaces;

interface OrderInterface
{
    public function create(string $fullName,string $numberPhone,string $address,string $note);
    public function addDetail(int $orderId, array $foodIds, array $cartInfo);
}
