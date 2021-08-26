<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Function to return all viewers to the admin page and put them in a table
    public function adminUserList()
    {
        $users = User::all();

        return view('admin', ['users' => $users]);
    }

    // Function to return the user info to edit a specific user settings
    public function userShow($id)
    {
        // Look for the specific User ID
        $user = User::find($id);

        return view('user', ['user' => $user]);
    }

    // Function to update a specific user settings
    public function userUpdate(Request $request, $id)
    {
        // Look for the specific User ID
        $user = User::find($id);

        // Set the Attributes
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->contact = $request->contact;

        // Save on the model instance
        $user->save();

        // Retrieve the User
        $user = User::find($id);

        // Return the Client Settings View
        return view('user', ['user' => $user]);
    }
}
