<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $statuses = [
                ['category' => 'Visitors', 'value' => '1,294', 'icon' => 'fas fa-users', 'color' => 'primary'],
                ['category' => 'Subscribers', 'value' => '1,303', 'icon' => 'fas fa-user-check', 'color' => 'info'],
                ['category' => 'Sales | Revenue', 'value' => 'KES 25', 'icon' => 'fas fa-luggage-cart', 'color' => 'success'],
                ['category' => 'Order', 'value' => '576', 'icon' => 'far fa-check-circle', 'color' => 'secondary'],
                ['category' => 'Products', 'value' => '12', 'icon' => 'far fa-check-circle', 'color' => 'secondary'],
                ['category' => 'Customers', 'value' => '18', 'icon' => 'far fa-check-circle', 'color' => 'secondary'],
                ['category' => 'Categories', 'value' => '12', 'icon' => 'far fa-check-circle', 'color' => 'secondary'],
            ];
            return view('admin.index', compact('statuses'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
