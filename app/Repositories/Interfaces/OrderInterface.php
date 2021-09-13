<?php

namespace App\Repositories\Interfaces;

interface OrderInterface
{
    public function getList(int $userId, int $page, int $store, int $limit);
    public function getOrderDetail(array $orderIds, int $storeId);
    public function create(string $fullName,string $numberPhone,string $address,string $note);
    public function addDetail(int $orderId, array $foodIds, array $cartInfo);
}
