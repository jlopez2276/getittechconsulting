<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service; 

class ServiceController extends Controller
{
    public function newService() {
        $serviceItems = DB::table('service_items')->get();

        return view('invoice_builder',['items'=>$serviceItems]);
    }

    public function saveService(Request $request) {

        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->address = $request->address;
        $service->preparedByName = $request->preparedByName;
        $service->salesTaxAmount = $request->salesTaxAmount;
        $service->estimatedTotalCost = $request->estimatedTotalCost;
        $service->actualTotalCost = $request->actualTotalCost;
        $service->Status = $request->Status;

        $service->save();
    }

    public function listServices() {

    }
}
