<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Alert;
use App\Models\User;
use App\Models\Playlist;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AlertController extends Controller
{
    public function getApi()
    {
        // Create a new client
        $alerts = new Client();

        // Set the URL of the API to get the stations JSON
        $url = 'https://heichwaasser.lu/api/v1/stations';

        // Save the API request answer to a variable
        $response = $alerts->request('GET', $url);

        // Decode the JSON file into an Object
        $responseBodys = json_decode($response->getBody());

        // Looping through the Object
        foreach ($responseBodys as $response) {
            // Nested Loop to Iterate through the alert_levels array
            foreach ($response->alert_levels as $key => $level) {

                // Conditionals to save the water levels into variables and rehuse them to check
                // if the current water levels are at certain levels or normal
                if ($level->name === 'Cote d’alerte') {
                    $redAlertLevel = $level->value;

                    // Checking if current water level is higher then the alert level
                    if ($response->current->value >= $redAlertLevel) {

                        // Find the alert
                        $alert = Alert::find($response->id);

                        // Set the Attributes
                        $alert->type = 'Extreme Danger';
                        $alert->description = 'alert';
                        $alert->trend = $response->trend;
                        $alert->water_level = $response->current->value;
                        $alert->updated_at = Carbon::now()->format('Y-m-d H:i:s');

                        // Save on the model instance
                        $alert->save();
                    }
                } else if ($level->name === 'Cote de préalerte') {

                    $orangeAlertLevel = $level->value;

                    // Checking if current water level is higher then the alert level
                    if ($response->current->value >= $orangeAlertLevel) {

                        // Find the alert
                        $alert = Alert::find($response->id);

                        // Set the Attributes
                        $alert->type = 'Danger';
                        $alert->description = 'pre-alert';
                        $alert->trend = $response->trend;
                        $alert->water_level = $response->current->value;
                        $alert->updated_at = Carbon::now()->format('Y-m-d H:i:s');

                        // Save on the model instance
                        $alert->save();
                    }
                } else if ($level->name === 'Cote de vigilance') {

                    $yellowAlertLevel = $level->value;

                    // Checking if current water level is higher then the alert level
                    if ($response->current->value >= $yellowAlertLevel) {

                        // Find the alert
                        $alert = Alert::find($response->id);

                        // Set the Attributes
                        $alert->type = 'Potential Danger';
                        $alert->description = 'caution';
                        $alert->trend = $response->trend;
                        $alert->water_level = $response->current->value;
                        $alert->updated_at = Carbon::now()->format('Y-m-d H:i:s');

                        // Save on the model instance
                        $alert->save();

                        // If the water level is not higher then any of the alerts it's in green/good status then run this code
                    } else {

                        // Find the alert
                        $alert = Alert::find($response->id);
                        
                        // Set the Attributes
                        $alert->type = 'Low Danger';
                        $alert->description = 'awareness';
                        $alert->trend = $response->trend;
                        $alert->water_level = $response->current->value;
                        $alert->updated_at = Carbon::now()->format('Y-m-d H:i:s');

                        // Save on the model instance
                        $alert->save();
                    }
                }

                // If the water level is lower then the minimum water levels
                if ($response->current->value <= $response->minimum->value) {

                    // Find the alert
                    $alert = Alert::find($response->id);

                    // Set the Attributes
                    $alert->type = 'Dried Up River';
                    $alert->description = 'awareness';
                    $alert->trend = $response->trend;
                    $alert->water_level = $response->current->value;
                    $alert->updated_at = Carbon::now()->format('Y-m-d H:i:s');

                    // Save on the model instance
                    $alert->save();;
                }
            }
        }
    }

    public function showAlerts()
    {
        // $this->getApi();

        $alerts = Alert::all();
        $users = User::all();

        return view('alerts', ['alerts' => $alerts, 'users' => $users]);
    }

    public function addAlert($alert_id)
    {


        $user_id = Auth::user()->id;
        // $user_id = 1;

        $playlist = Playlist::firstOrNew(
            ['user_id' => $user_id, 'alert_id' => $alert_id]
        );
        if ($playlist != null) {
            $playlist->save();
        }


        return back()->withInput();
    }
    public function alertPlaylist()
    {
        // Look for the specific User ID
        $id = Auth::user()->id;

        // $id = 1;

        $playlistAlerts = Playlist::all()->where('user_id', '=', $id);


        $user = User::find($id);

        $alerts = array();

        foreach ($playlistAlerts as $alert) {
            $alerts[] = Alert::all()->where('id', '=', $alert->alert_id);
        }

        return view('client-settings', ['user' => $user, 'alerts' => $alerts]);
    }
    public function homePlaylist()
    {

        $id = Auth::user()->id;
        // $id = 1;

        $playlistAlerts = Playlist::all()->where('user_id', '=', $id);

        $alerts = array();

        foreach ($playlistAlerts as $alert) {
            $alerts[] = Alert::all()->where('id', '=', $alert->alert_id);
        }

        return view('home', ['alerts' => $alerts]);
    }

    public function alert_edit_show($id)
    {
        $alert = Alert::find($id);

        return view('alert-edit', ['alert' => $alert]);
    }
    public function alert_edit_submit(Request $request, $id)
    {
        $alert = Alert::find($id);

        $alert->water_caution_level = $request->water_caution_level;
        $alert->water_prealert_level = $request->water_prealert_level;
        $alert->water_alert_level = $request->water_alert_level;

        $alert->save();

        // retrieve the users
        $users = User::all();
        $alerts = Alert::all();

        // function to return the admin page
        return view('admin', ['users' => $users, 'alerts' => $alerts]);
    }
    public function removeAlert($id)
    {
        $alert = Playlist::where('alert_id', $id)->delete();

        return redirect()->route('client-settings');
    }
}
