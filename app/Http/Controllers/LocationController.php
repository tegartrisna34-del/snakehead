<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LocationController extends Controller
{
    public function provinces()
    {
        try {
            $resp = Http::timeout(10)->get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');
            return response($resp->body(), 200)->header('Content-Type', 'application/json');
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch provinces'], 500);
        }
    }

    public function regencies($provId)
    {
        try {
            $url = 'https://emsifa.github.io/api-wilayah-indonesia/api/regencies/' . intval($provId) . '.json';
            $resp = Http::timeout(10)->get($url);
            return response($resp->body(), 200)->header('Content-Type', 'application/json');
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch regencies'], 500);
        }
    }
}
