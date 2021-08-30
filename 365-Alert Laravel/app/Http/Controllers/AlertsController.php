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

        // Looping through the Object 
        foreach ($responseBodys as $response) {

            // Nested Loop to Iterate through the alert_levels array
            foreach ($response->alert_levels as $key => $level) {
                
                // Conditionals to save the water levels into variables and rehuse them to check
                // if the current water levels are at certain levels or normal
                if ($level->name === 'Cote de vigilance') {
                    
                    $yellowAlertLevel = $level->value;
                    
                    if ($response->current->value >= $yellowAlertLevel) {
                        echo "Yellow Alert";
                    }
                } else if ($level->name === 'Cote de préalerte') {
                    
                    $orangeAlertLevel = $level->value;

                    if ($response->current->value >= $orangeAlertLevel) {
                        echo "Orange Alert";
                    }
                } else if ($level->name === "Cote d'alerte") {
                    
                    $redAlertLevel = $level->value;

                    if ($response->current->value >= $redAlertLevel) {
                        echo "Red Alert";
                    }

                } else if ($response->current->value <= $response->minimum->value) {
                    echo $response->city . " is dry";

                } else {
                    echo $response->city . " is " . $response->current->value . " cm and everything is okei<br>";
                }

        }
    }
            




        //create controller to pull from api
        //take data from api and make alert fuintions with ifs and shit 


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alerts  $alerts
     * @return \Illuminate\Http\Response
     */
    public function show(Alerts $alerts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alerts  $alerts
     * @return \Illuminate\Http\Response
     */
    public function edit(Alerts $alerts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alerts  $alerts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alerts $alerts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alerts  $alerts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alerts $alerts)
    {
        //
    }
}
