<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerServiceController extends Controller
{
    /*************************************************************
     * 
     * Customer and guests user of the system
     * 
     *************************************************************/

    // Display a listing of the customer services.
    public function index()
    {
        $customerServices = User::all();
        return view('customer_services.index', compact('customerServices'));
    }

    // Display the specified customer service.
    public function show($id)
    {
        $customerService = User::findOrFail($id);
        return view('customer_services.show', compact('customerService'));
    }

    /*************************************************************
     * 
     * Super Admin of the system
     * 
     *************************************************************/

    // Display a listing of the customer services for the admin.
    public function adminIndex()
    {
        // Retrieve all users with the role of 'user'
        $customerServices = User::where('role', 'user')->get();

        // Pass the filtered users to the view
        return view('admin.customer_services.index', compact('customerServices'));
    }


    // Show the form for creating a new customer service.
    public function create()
    {
        return view('admin.customer_services.create');
    }

    // Store a newly created customer service in storage.
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:admin,user',
        ]);

        // Create the user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Hash the password
        $user->role = $request->role; // Set the role
        $user->save();

        // Redirect with a success message
        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }


    // Display the specified customer service for the admin.
    public function adminShow($id)
    {
        $customerService = User::findOrFail($id);
        return view('admin.customer_services.show', compact('customerService'));
    }

    // Show the form for editing the specified customer service.
    public function edit($id)
    {
        $customerService = User::findOrFail($id);
        return view('admin.customer_services.edit', compact('customerService'));
    }

    // Update the specified customer service in storage.
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id, // Allow the current user's email
            'password' => 'nullable|string|min:8|confirmed', // Password can be nullable if not updating
            'role' => 'required|in:admin,user',
        ]);

        // Find the user
        $user = User::findOrFail($id);

        // Update user details
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        // Update password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Save the updated user
        $user->save();

        // Redirect with a success message
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }


    // Remove the specified customer service from storage.
    public function destroy($id)
    {
        try {
            // Find the user by ID
            $user = User::findOrFail($id);

            // Delete the user
            $user->delete();

            // Redirect with a success message
            return redirect()->route('admin.customer-services.index')->with('success', 'Customer service deleted successfully.');
        } catch (\Exception $e) {
            // Handle the error if the user cannot be deleted
            return redirect()->route('admin.customer-services.index')->with('error', 'An error occurred while deleting the customer service.');
        }
    }

}