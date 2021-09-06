<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Alert;
use App\Models\Playlist;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Function to return all viewers to the admin page and put them in a table
    public function adminUsersList()
    {
        $users = User::all();
        $alerts = Alert::all();
        

        return view('admin', ['users' => $users, 'alerts' => $alerts]);
    }

    // Function to return the Admin view to edit the User
    public function adminUserEdit($id)
    {
        $user = User::find($id);

        return view('admin-user-edit', ['user' => $user]);
    }

    public function adminUserUpdate(Request $request, $id)
    {
        // Look for the specific User ID
        $user = User::find($id);

        // Set the Attributes
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->contact = $request->contact;

        // Save on the model instance
        $user->save();

        // Retrieve the User and the Alerts
        $users = User::all();
        $alerts = Alert::all();

        // Return the Client Settings View
        return view('admin', ['users' => $users, 'alerts' => $alerts]);
    }

    // Function to delete an user as an Admin
    public function adminUserDelete($id)
    {
        User::destroy($id);

        // retrieve the users
        $users = User::all();
        $alerts = Alert::all();
        
        // function to return the admin page
        return view('admin', ['users' => $users, 'alerts' => $alerts]);
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
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
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


    public function loggedUserShow()
    {
        // $id = Auth::user()->id;
        $id = 1;
        // Look for the specific User ID

        $users = User::find($id);

        return view('client-settings', ['user' => $users]);
    }
    public function editClientSettingsShow()
    {
        // Look for the specific User ID
        // $id = Auth::user()->id;

        $id = 1;

        $user = User::find($id);

        return view('client-settings-edit', ['user' => $user]);
    }
    public function editClientSettingSubmit(Request $request, $id)
    {
        $user = User::find($id);

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->contact = $request->contact;
        $user->password = $request->password;

        $user->save();

        $alerts = array();
        
        $playlistAlerts = Playlist::all()->where('user_id', '=', $id);

        
        foreach ($playlistAlerts as $alert) {
            $alerts[] = Alert::all()->where('id', '=', $alert->alert_id);
        }

        return view('client-settings', ['user' => $user, 'alerts' => $alerts]);

    }
}
