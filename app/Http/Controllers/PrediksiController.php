<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PrediksiController extends Controller
{
    public function index()
    {
        return view('user.pred.index');
    }

    public function cekDepresi(Request $request)
    {
        $data = $request->only(['femaleres', 'age', 'married', 'children', 'hhsize', 'edu', "day_of_week", "saved_mpesa", "received_mpesa", "given_mpesa", "ent_wagelabor", "ent_ownfarm", "ent_business", "ent_nonagbusiness"]);

        $response = Http::post('http://127.0.0.1:5000/predict', [
            'data' => array_values($data)
        ]);

        if ($response->successful()) {
            return view('user.pred.hasil', ['predicted_proba' => $response->json()]);
        } else {
            return response()->json(['error' => 'Failed to get prediction data.'], 500);
        }
    }
}
