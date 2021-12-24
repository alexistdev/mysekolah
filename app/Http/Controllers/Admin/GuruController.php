<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    /**
     * MySekolah v.1.0
     * created: 24-12-2021
     * Author: AlexistDev
     * Email: Alexistdev@gmail.com
     * phone: 0813-7982-3241
     */
    protected $users;
    protected $role;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->users=Auth::user();
            $this->role=User::with('role')->find($this->users->id)->role;
            return $next($request);
        });
    }

    public function index()
    {
        return view('admin.guru',array(
            'judul' => "Dashboard Administrator | MILISENSI v.1.0",
            'aktifTag' => "admin",
            'tagSubMenu' => "guru",
        ));
    }
}
