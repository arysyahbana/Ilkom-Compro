<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AkreditasiDepartemen;
use App\Models\Jurnal;
use App\Models\KonsentrasiPenjurusan;
use App\Models\Kurikulum;
use App\Models\ProgramSarjana;
use App\Models\Sop;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function kurikulum()
    {
        $data = Kurikulum::first();
        return view('frontend.pages.akademik.kurikulum', compact('data'));
    }
    public function akreditasi()
    {
        $data = AkreditasiDepartemen::first();
        return view('frontend.pages.akademik.akreditasi', compact('data'));
    }
    public function sop()
    {
        $data = Sop::latest()->get();
        return view('frontend.pages.akademik.sop', compact('data'));
    }

    public function sop_detail($id)
    {
        $item = Sop::find($id);
        return view('frontend.pages.akademik.sop-detail', compact('item'));
    }

    public function konsentrasi_penjurusan()
    {
        $data = KonsentrasiPenjurusan::latest()->get();
        return view('frontend.pages.akademik.konsentrasipenjurusan', compact('data'));
    }

    public function program_sarjana()
    {
        $data = ProgramSarjana::first();
        return view('frontend.pages.akademik.programsarjana', compact('data'));
    }

    public function jurnal()
    {
        $data = Jurnal::latest()->get();
        return view('frontend.pages.akademik.jurnal', compact('data'));
    }
    public function jurnal_detail($id)
    {
        $item = Jurnal::find($id);
        return view('frontend.pages.akademik.jurnal-detail', compact('item'));
    }
}
