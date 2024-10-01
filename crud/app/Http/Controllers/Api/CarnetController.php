<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarnetEditRequest;
use App\Http\Requests\CarnetRequest;
use App\Http\Resources\CarnetCollection;
use App\Http\Resources\V1\CarnetResource;
use App\Models\Carnet;
use Exception;
use Illuminate\Http\Request;

class CarnetController extends Controller
{

    // la recupperation de carnet de note
    public function index()
    {
        return new CarnetCollection(Carnet::all());
    }
    // la recupperation de carnet de note
    public function ViewCarnet(Carnet $carnet)
    {
        return    new CarnetResource($carnet);
    }

    // la cration de carnet de note
    public function StoreCarnet(CarnetRequest $request)
    {
        Carnet::create($request->validated());
        return response()->json("Le carnet a bien  été creé");
    }
    // la mise a jour de carnet de note
    public function UpdateCarnet(CarnetEditRequest $request,  Carnet $carnet)
    {
        $carnet->update($request->validated());
        return response()->json("La miese  à jour  effectué avec succès");
    }
    // la suppression de carnet de note

    public function DeleteCarnet(Carnet $carnet)
    {

        $carnet->delete();
    }
}
