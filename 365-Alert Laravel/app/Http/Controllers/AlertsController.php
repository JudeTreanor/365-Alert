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

        $url = 'https://data.public.lu/en/reuses/heichwaasser-api/';

        $response = $alerts->request('GET', $url);

        $responseBody = json_decode($response->getBody());

        dd($responseBody);

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
        //
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
