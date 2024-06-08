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
        // Ambil data dari request menggunakan $request->input()
        $data = $request->input(['femaleres', 'age', 'married', 'children', 'hhsize', 'edu', "day_of_week", "saved_mpesa", "received_mpesa", "given_mpesa", "ent_wagelabor", "ent_ownfarm", "ent_business", "ent_nonagbusiness"]);

        // Gunakan $request->only() langsung dalam konstruksi koleksi
        $filteredData = collect($request->only(['femaleres', 'age', 'married', 'children', 'hhsize', 'edu', "day_of_week", "saved_mpesa", "received_mpesa", "given_mpesa", "ent_wagelabor", "ent_ownfarm", "ent_business", "ent_nonagbusiness"]));

        // Buat permintaan HTTP untuk memprediksi depresi
        $response = Http::post('http://127.0.0.1:5000/predict', [
            'data' => array_values($filteredData->all())
        ]);

        // Periksa apakah permintaan berhasil sebelum mengakses data respons
        if ($response->successful()) {
            // Jika berhasil, tampilkan hasil prediksi
            return view('user.pred.hasil', ['predicted_proba' => $response->json()]);
        } else {
            // Jika gagal, kembalikan pesan kesalahan
            return response()->json(['error' => 'Failed to get prediction data.'], 500);
        }
    }
}
