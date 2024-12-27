<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    public function index()
    {
        $visitors = DB::table('visitors')
            ->select('ip', 'city', 'country', DB::raw('count(*) as total'))
            ->groupBy('ip', 'city', 'country')
            ->orderByDesc('total')
            ->get();

        return view('admin.pages.visitors.index', compact('visitors'));
    }
}
