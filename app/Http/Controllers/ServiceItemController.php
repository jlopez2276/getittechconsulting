<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceItem;
use DB;

class ServiceItemController extends Controller
{
    public function newServiceItem() {
        return view('service_item_builder');
    }
    public function saveServiceItem() {

    }
    public function listServiceItems() {
        $serviceItems = DB::table('service_items')->get();
        return view('service_item_list',['items'=>$serviceItems]);
    }
}
