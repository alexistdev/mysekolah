<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * MySekolah v.1.0
     * created: 24-12-2021
     * Author: AlexistDev
     * Email: Alexistdev@gmail.com
     * phone: 0813-7982-3241
     */

    public function index()
    {
        return view('admin.dashboard',array(
            'judul' => "Dashboard Administrator | MILISENSI v.1.0",
            'aktifTag' => "admin",
            'tagSubMenu' => "dashboard",
        ));
    }
}
