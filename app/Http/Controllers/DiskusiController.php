<?php

namespace App\Http\Controllers;

use App\Models\Diskusi;
use Illuminate\Http\Request;

class DiskusiController extends Controller
{
    public function kirimPesan(Request $request)
    {
        $request->validate([
            'isi' => 'required|string',
            'diskusi_id' => 'nullable',
        ], [
            'isi.required' => 'Isi pesan harus diisi.',
            'isi.string' => 'Isi pesan harus berupa teks.',
        ]);

        try {
            $diskusi = new Diskusi();
            $diskusi->isi = $request->isi;
            $diskusi->user_id = auth()->id();
            $diskusi->diskusi_id = $request->diskusi_id;
            $diskusi->save();

            return back();
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan dalam mengirim pesan. Silakan coba lagi.']);
        }
    }

    public function diskusi(Request $request)
    {
        // Mengambil semua data diskusi dari model Diskusi
        $diskusi = Diskusi::all();

        // Mengirim data diskusi ke view 'pesan'
        return view('pesan', compact('diskusi'));
    }
}
