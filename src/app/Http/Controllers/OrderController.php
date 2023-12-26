<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Order $order)
    {
        $newOrder = $order->create($request->all());
        return response()->json([
            "data" => $newOrder,
            "message" => "Order created successfully",
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
