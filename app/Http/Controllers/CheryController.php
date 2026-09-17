<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CheryController extends Controller
{
    public function index(): View
    {
        return view('chery.index');
    }

    public function mobil(): View
    {
        return view('chery.mobil.index');
    }

    public function tiggo8(): View
    {
        return view('chery.mobil.tiggo8');
    }

    public function omoda5(): View
    {
        return view('chery.mobil.omoda5');
    }

    public function promo(): View
    {
        return view('chery.promo');
    }

    public function tentangKami(): View
    {
        return view('chery.tentang');
    }

    public function kontak(): View
    {
        return view('chery.kontak');
    }
}