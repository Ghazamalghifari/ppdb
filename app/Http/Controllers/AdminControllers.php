<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Database;
use App\BuktiPendaftaran;
use Auth;
use Session; 
use File;  

class AdminControllers extends Controller
{
    //
    public function pendaftaran(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            # code...
            $post = BuktiPendaftaran::select(['id','id_siswa','nama_pengirim','nama_bank','foto_bukti','created_at']);
            return Datatables::of($post)->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'id_siswa', 'name' => 'id_siswa', 'title' => 'Siswa'])
        ->addColumn(['data' => 'nama_pengirim', 'name' => 'nama_pengirim', 'title' => 'Pengirim'])  
        ->addColumn(['data' => 'nama_bank', 'name' => 'nama_bank', 'title' => 'Bank']) 
        ->addColumn(['data' => 'created_at', 'name' => 'created_at', 'title' => 'Waktu']);
        return view('admin.pendaftaran')->with(compact('html')); 
    }
}
