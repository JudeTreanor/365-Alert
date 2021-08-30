<?php

namespace App\Http\Controllers;

use App\Models\Alerts;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AlertsController extends Controller
{
    public function getApi()
    {
        $alerts = new Client();


        $url = 'https://heichwaasser.lu/api/v1/stations';

        $response = $alerts->request('GET', $url);

        $responseBodys = json_decode($response->getBody());

        

        foreach ($responseBodys as $response) {
            // Alert Assigning
            foreach ($response->alert_levels as $key => $level) {
                $redAlertLevel = 
                
                if ($response->current->value >= $redAlertLevel) {
                    echo $response->city . " is in Red Alert" .  "<br>";
                    
                } else {
                    $orangeAlertLevel = $level->value;
                    if ($response->current->value >= $orangeAlertLevel) {
                        echo $response->city . " is in Orange Alert" . "<br>";
                    }
                }
                // Comparing the current water level(value) with the maximum with the values that the API has set
                // if ($response->current->value >= $redAlertLevel) {
                //     echo $response->city . " is in Red Alert" .  "<br>";
    
                // } else if ($response->current->value >= $orangeAlertLevel) {
                //     echo $response->city . " is in Orange Alert" . "<br>";
    
                // } else {
                //     echo $response->city . " is good" . "<br>";
                // }
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
