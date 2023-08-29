<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getRes()
    {
        $response = Http::get("https://www.swiggy.com/dapi/restaurants/list/v5?lat=19.0759837&lng=72.8776559&page_type=DESKTOP_WEB_LISTING");

        if ($response->successful()) {
            return $response;
            $data = $response->json();
            return response()->json(["data"=>$data]);
        } else {
            return response()->json(['error' => 'API request failed'], $response->status());
        }
    }
    public function getResDetail($id)
    {
        $response = Http::get("https://www.swiggy.com/dapi/menu/pl?page-type=REGULAR_MENU&complete-menu=true&lat=19.0759837&lng=72.8776559&restaurantId={$id}&submitAction=ENTER");

        if ($response->successful()) {
            return $response;
            $data = $response->json();
            return response()->json(["data"=>$data]);
        } else {
            return response()->json(['error' => 'API request failed'], $response->status());
        }
    }
}
