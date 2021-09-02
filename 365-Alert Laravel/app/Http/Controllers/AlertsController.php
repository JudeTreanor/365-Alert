<?php

namespace App\Http\Controllers;

use App\Models\Alerts;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AlertsController extends Controller
{
    public function alertsPage()
    {
        return view('alerts');
    }
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

        // $new_array = array($responseBodys);

        // var_dump($responseBodys);

        // Looping through the Object 
        $results = array();
        foreach ($responseBodys as $response) {
            // Nested Loop to Iterate through the alert_levels array
            foreach ($response->alert_levels as $key => $level) {
                
                // Conditionals to save the water levels into variables and rehuse them to check
                // if the current water levels are at certain levels or normal
                if ($level->name === 'Cote d’alerte') {
                    $redAlertLevel = $level->value;

                    if ($response->current->value >= $redAlertLevel) {
                        $results[] = ["id" => $response->id,  "city" => $response->city,   "alert" =>  $redAlertLevel, "current" => $response->current->value];
                    } 
                    // else {
                    //     $results[] = ["id" => $response->id, "city" => $response->city, "alert" => ""];
                    // }
                } else if ($level->name === 'Cote de préalerte') {

                    $orangeAlertLevel = $level->value;

                    if ($response->current->value >= $orangeAlertLevel) {
                        
                        $results[] = ["id" => $response->id,  "city" => $response->city,   "alert" =>  $orangeAlertLevel];
                    } 
                    // else {

                    //     $results[] = ["id" => $response->id, "city" => $response->city, "is fine"];
                    // }
                } else if ($level->name === 'Cote de vigilance') {

                    $yellowAlertLevel = $level->value;

                    if ($response->current->value >= $yellowAlertLevel) {

                        
                        $results[] = ["id" => $response->id,  "city" => $response->city,   "alert" =>  $yellowAlertLevel];
                        
                    } else {
                        $results[] = ["id" => $response->id, "city" => $response->city, "answer" => "is fine"];
                    }
                }

                if ($response->current->value <= $response->minimum->value) {
                    $results[] = ["id" => $response->id, "city" => $response->city, "is low on water"];
                }
            }
        }
        return json_encode($results, JSON_PRETTY_PRINT);

        //should be working

        return view('alerts');
    }
}
