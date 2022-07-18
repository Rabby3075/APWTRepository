<?php

namespace App\Http\Controllers;

use App\Models\ride;
use App\Http\Requests\StorerideRequest;
use App\Http\Requests\UpdaterideRequest;

class RideController extends Controller
{
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
     * @param  \App\Http\Requests\StorerideRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerideRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function show(ride $ride)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function edit(ride $ride)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterideRequest  $request
     * @param  \App\Models\ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterideRequest $request, ride $ride)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function destroy(ride $ride)
    {
        //
    }
    public function rideHis(){
        $req = "Ride complete";
        $rideHis = ride::where('riderId',1)->where('customerStatus',$req)->where('riderStatus',$req)->get();
        return view('rideHis')->with('rideHis', $rideHis);
    }
    public function APIList(){
        $req = "Ride complete";
        return ride::where('riderId',1)->where('customerStatus',$req)->where('riderStatus',$req)->get();
    }
}
