<?php

namespace App\Http\Controllers;

use App\Models\dashboard;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Siswa;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = User::all();
        // $jurusan = Jurusan::all();
        // $siswa = Siswa::all(); 

        return view('dashboard.index' 
        // compact('user', 'jurusan', 'siswa')
    );
    }
}