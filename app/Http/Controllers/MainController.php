<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function permainan()
    {
        return view('permainan');
    }

    public function masukan()
    {
        return view('masukan');
    }

    public function detail()
    {
        return view('detail');
    }

    public function informasi()
    {
        return view('informasi');
    }

    public function project()
    {
        return view('project');
    }

    public function team()
    {
        return view('team');
    }

    public function prediksi()
    {
        return view('prediksi');
    }
}

