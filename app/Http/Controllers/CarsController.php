<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        return response(Car::all()->jsonSerialize(), Response::HTTP_OK);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new car;
        $car->brand = request('brand');
        $car->model = request('model');
        $car->type = request('type');
        $car->passangers = request('passangers');
        $car->bags = request('bags');
        $car->doors = request('doors');
        $car->price = request('price');
        $car->lat = request('lat');
        $car->lng = request('lng');
        $car->address = request('address');
        $car->save();

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('/cars/edit',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {




        $car->model = request('model');
        $car->type = request('type');

        $car->passangers = request('passangers');
        $car->doors = request('doors');
        $car->bags = request('bags');
        $car->price = request('price');
        $car->lat = request('lat');
        $car->lng = request('lng');
        $car->address = request('address');
        $car->save();

        return redirect('/cars');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
