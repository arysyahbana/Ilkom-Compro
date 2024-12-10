<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\StrukturOrganisasi;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function sejarah()
    {
        return view('frontend.pages.tentang.sejarah');
    }

    public function visimisi()
    {
        $dataVisiMisi = VisiMisi::first();
        return view('frontend.pages.tentang.visimisi', compact('dataVisiMisi'));
    }

    public function dosen()
    {
        $dosen = Dosen::with('rBidangkajian', 'rPangkat', 'rGolongan', 'rJabatan', 'rKonsentrasi')->get();
        return view('frontend.pages.tentang.dosen', compact('dosen'));
    }
    public function struktur()
    {
        $dataStruktur = StrukturOrganisasi::first();
        return view('frontend.pages.tentang.struktur', compact('dataStruktur'));
    }
}
