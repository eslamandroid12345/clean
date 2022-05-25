<?php

namespace App\Repositories;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Interfaces\OrderRepositoryInterface;
use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface
{


    public function getAllOrders()
    {
        return Order::all();
    }



    public function getOrderById($orderId)
    {
        $order = new OrderResource(Order::findOrFail($orderId));

        if(!$order){

            return returnMessageError("order not found","404");

        }else{

            return returnDataSuccess("order get successfully","201","order",$order);


        }

    }


    public function deleteOrder($orderId)
    {

        $order = Order::findOrFail($orderId);

        if(!$order){

            return returnMessageError("order not found","404");

        }else{

            $order->delete();
            return returnMessageSuccess("order deleted successfully","201");


        }

    }

    public function createOrder(StoreOrderRequest $request)
    {

        try {

            $order = new Order();
            $order->details = $request->details;
            $order->client = $request->client;
            $order->save();

            return returnDataSuccess("order created successfully","201","order",new OrderResource($order));

        }catch (\Exception $exception){


            return returnMessageError($exception->getMessage(),"500");
        }


    }

    public function updateOrder($orderId,UpdateOrderRequest $request)
    {

        try {

            $order = Order::findOrFail($orderId);
            $order->details = $request->details;
            $order->client = $request->client;
            $order->save();


            return returnDataSuccess("order updated successfully","201","order",new OrderResource($order));

        } catch (\Exception $exception){


            return returnMessageError($exception->getMessage(),"500");
        }

    }

    public function getFulfilledOrders()
    {

        $orders = Order::where('is_fulfilled', true)->get();

        return returnDataSuccess("order active get successfully","201","order",OrderResource::collection($orders));
    }
}
