<?php

namespace App\Http\Controllers;

use App\Models\Alerts;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AlertsController extends Controller
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
                        $response->city . " is on Red Alert<br>";

                        //return $results = [$redAlertLevel, $response->city . " is on Red Alert<br>", $orangeAlertLevel, $response->city . " is on Orange Alert<br>"];
                    }
                } else if ($level->name === 'Cote de préalerte') {

                    $orangeAlertLevel = $level->value;

                    if ($response->current->value >= $orangeAlertLevel) {
                        $response->city . " is on Orange Alert<br>";
                        //  return $results = [$orangeAlertLevel, $response->city . " is on Orange Alert<br>"];
                    }
                } else if ($level->name === 'Cote de vigilance') {

                    $yellowAlertLevel = $level->value;

                    if ($response->current->value >= $yellowAlertLevel) {
                        $response->city . " is on Yellow Alert<br>";
                        //   return $results = [$yellowAlertLevel, $response->city . " is on Yellow Alert<br>"];
                    } else {
                        // return $response->city . " is " . $response->current->value . " cm and everything is okei<br>";
                    }
                }

                if ($response->current->value <= $response->minimum->value) {
                    echo $response->city . " is dry";
                }


                echo json_encode($results, JSON_PRETTY_PRINT);
            }
        }
        return $results = [$redAlertLevel, $response->city . " is on Red Alert<br>", $orangeAlertLevel, $response->city . " is on Orange Alert<br>", $yellowAlertLevel, $response->city . " is on Yellow Alert<br>"];




        return view('alerts');
    }
}
