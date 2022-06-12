<?php

namespace App\Http\Controllers;

use App\Models\DataCustomer;
use App\Models\DataBuku;
use App\Models\DataKategori;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('index',[
            'jumlah_customer'=> DataCustomer::count(),
            'jumlah_pegawai' => User::count(),
            'jumlah_buku' => DataBuku::count(),
            'jumlah_kategori' => DataKategori::count()
        ]);
    }
}
