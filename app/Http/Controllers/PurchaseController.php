<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the purchases.
     */
    public function index()
    {
        $purchases = Purchase::all();
        return view('purchases.index', compact('purchases'));
    }

    /**
     * Show the form for creating a new purchase.
     */
    public function create()
    {
        return view('purchases.create');
    }

    /**
     * Store a newly created purchase in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            // Add other validation rules as necessary
        ]);

        $purchase = Purchase::create([
            'user_id' => auth()->id(), // Assuming user is logged in
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            // Add other fields as necessary
        ]);

        return redirect()->route('purchases.show', $purchase)->with('success', 'Purchase created successfully.');
    }

    /**
     * Display the specified purchase.
     */
    public function show(Purchase $purchase)
    {
        return view('purchases.show', compact('purchase'));
    }

    /**
     * Show the form for editing the specified purchase.
     */
    public function edit(Purchase $purchase)
    {
        return view('purchases.edit', compact('purchase'));
    }

    /**
     * Update the specified purchase in storage.
     */
    public function update(Request $request, Purchase $purchase)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            // Add other validation rules as necessary
        ]);

        $purchase->update($request->only('product_id', 'quantity'));

        return redirect()->route('purchases.index')->with('success', 'Purchase updated successfully.');
    }

    /**
     * Remove the specified purchase from storage.
     */
    public function destroy(Purchase $purchase)
    {
        $purchase->delete();

        return redirect()->route('purchases.index')->with('success', 'Purchase deleted successfully.');
    }
}
