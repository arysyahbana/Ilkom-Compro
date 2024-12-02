<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends MasterController
{
    public function __construct()
    {
        $this->model = VisiMisi::class;
        $this->viewPath = 'admin.pages.visimisi';
    }
}
