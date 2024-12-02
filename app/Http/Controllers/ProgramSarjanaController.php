<?php

namespace App\Http\Controllers;

use App\Models\ProgramSarjana;
use Illuminate\Http\Request;

class ProgramSarjanaController extends MasterController
{
    public function __construct()
    {
        $this->model = ProgramSarjana::class;
        $this->viewPath = 'admin.pages.programsarjana';
    }
}
