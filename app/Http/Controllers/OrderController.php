<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Repositories\OrderRepository;

class OrderController extends Controller
{

    public $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {

        $this->orderRepository = $orderRepository;
    }

    public function index()
    {

        return $this->orderRepository->getAllOrders();
    }



    public function store(StoreOrderRequest $request)
    {
        return $this->orderRepository->createOrder($request);

    }


    public function show($id)
    {

        return $this->orderRepository->getOrderById($id);
    }



    public function update($id,UpdateOrderRequest $request)
    {
        return $this->orderRepository->updateOrder($id,$request);
    }


    public function delete($id)
    {

        return $this->orderRepository->deleteOrder($id);
    }


    public function activeOrders(){

        return $this->orderRepository->getFulfilledOrders();
    }
}
