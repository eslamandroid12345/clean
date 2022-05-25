<?php


namespace App\Interfaces;


use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;

interface OrderRepositoryInterface
{

    public function getAllOrders();
    public function getOrderById($orderId);
    public function deleteOrder($orderId);
    public function createOrder(StoreOrderRequest $request);
    public function updateOrder($orderId,UpdateOrderRequest $request);
    public function getFulfilledOrders();

}