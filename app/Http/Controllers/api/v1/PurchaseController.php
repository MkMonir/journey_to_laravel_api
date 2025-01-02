<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Purchase;
use App\Http\Controllers\Controller;
use App\Http\Resources\PurchaseResource;
use App\Http\Requests\StorePurchaseRequest;
use App\Http\Requests\UpdatePurchaseRequest;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_purchases = PurchaseResource::collection(Purchase::all());

        return $all_purchases;
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePurchaseRequest $request)
    {
        $purchase = Purchase::create([
            'supplier_id' => $request->supplier_id,
            'purchase_date' => $request->purchase_date,
            'note' => $request->note,
            'subtotal' => $request->subtotal,
            'grand_total' => $request->grand_total,
        ]);

        foreach ($request->items as $item) {
            $purchase->items()->create([
                'product_id' => $item['product_id'],
                'bosta_type' => $item['bosta_type'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
                'total' => $item['total'],
            ]);
        }

        return PurchaseResource::make($purchase);
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePurchaseRequest $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase)
    {
        //
    }
}
