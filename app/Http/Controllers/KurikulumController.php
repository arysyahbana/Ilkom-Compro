<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends MasterController
{
    public function __construct()
    {
        $this->model = Kurikulum::class;
        $this->viewPath = 'admin.pages.kurikulum';
    }
}
