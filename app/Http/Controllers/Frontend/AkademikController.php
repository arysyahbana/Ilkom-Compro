<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function sop()
    {
        return view('frontend.pages.akademik.sop');
    }

    public function sop_detail()
    {
        return view('frontend.pages.akademik.sop-detail');
    }
}
