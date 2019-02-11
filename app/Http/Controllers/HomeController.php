<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder; 
use Yajra\Datatables\Datatables;
use DateTime;
use App\DataSiswa;
use App\User;
use App\BuktiPendaftaran;
use App\SpecialisClass;
use Auth;
use Illuminate\Support\Facades\DB;
use Session;
use File;  

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */ 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function leaderclass()
    {
        $leaderclass = SpecialisClass::find('1');
        return view('specialis_class.leader',['leaderclass' => $leaderclass]);
    }

    public function programmerclass()
    {
        return view('specialis_class.programmer');
    }
    public function journalisclass()
    {
        return view('specialis_class.journalis');
    }
    public function tahfidzulclass()
    {
        return view('specialis_class.tahfidzul');
    }
    public function chefclass()
    {
        return view('specialis_class.chef');
    }
    public function athlateclass()
    {
        return view('specialis_class.athlate');
    }

    public function index(Request $request,Builder $htmlBuilder)
    {  
        if ($request->ajax()) {
            # code...
            $datasiswa = DataSiswa::select(['id','nama','nama_sekolah','status']);
            return Datatables::of($datasiswa)->addColumn('status',function($siswa){
                $status_siswa = "";
                if ($siswa->status_siswa == 0 ) {
                    # code...
                    $status_siswa = "Belum Verifed";

                }
                elseif ($siswa->status_siswa == 1) {
                    # code...
                    $status_siswa = "Belum Verifed";
                }
                elseif ($siswa->status_siswa == 2) {
                    # code...
                     $status_siswa = "Sudah Verifed";
                } 
                return $status_siswa;
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'nama', 'name' => 'nama', 'title' => 'Nama'])
        ->addColumn(['data' => 'nama_sekolah', 'name' => 'nama_sekolah', 'title' => 'Asal Sekolah'])
->addColumn(['data' => 'status_siswa', 'name'=>'status_siswa', 'title'=>'Status', 'searchable'=>false]);

        return view('welcome')->with(compact('html'));
    }

    public function home()
    {   

         $id_user = Auth::user()->id;
         $data_siswa = DataSiswa::where('id_siswa', $id_user)->count();
         $data_siswa1 = DataSiswa::where('id_siswa', $id_user)->first(); 

        return view('home',['data_siswa' => $data_siswa,'data_siswa1' => $data_siswa1]);
    }

    public function ppdb()
    {
        return view('ppdb');
    }

    public function bukti_pembayaran(Request $request)
    {


         $this->validate($request, [  
            'nama_pengirim'     => 'required', 
            'nama_bank'     => 'required', 
            'foto_bukti'     => 'image',
        ]); 
             // Mengambil file yang diupload
                $uploaded_foto_bukti = $request->file('foto_bukti');
                // mengambil extension file
                $extensionFotoBukti = $uploaded_foto_bukti->getClientOriginalExtension();
                // membuat nama file random berikut extension
                $filenameFotoBukti = str_random(40) . '.' . $extensionFotoBukti;
                // menyimpan foto_bukti ke folder public/foto_bukti
                $destinationPathFotoBukti = public_path() . DIRECTORY_SEPARATOR . 'bukti_pembayaran';
                $uploaded_foto_bukti->move($destinationPathFotoBukti, $filenameFotoBukti);
                // mengisi field foto_bukti di database kamar dengan filename yang baru dibuat

        $id_user = Auth::user()->id;
        $data_siswa = DataSiswa::where('id_siswa', $id_user)->first();
        DataSiswa::find($data_siswa->id)->update(['status'=> '1']); 

        BuktiPendaftaran::create([ 
            'id_siswa'=>$id_user, 
            'nama_pengirim'=>$request->nama_pengirim, 
            'nama_bank'=>$request->nama_bank, 
            'foto_bukti'=>$filenameFotoBukti]);

        return back();
    }

    public function daftar_siswa(Request $request)
    { 
         $id_user = Auth::user()->id;
         $this->validate($request, [  
            'nisn'     => 'required', 
            'nomor_sttb'     => 'required', 
            'nama'     => 'required', 
            'jenis_kelamin'     => 'required', 
            'nama_sekolah'     => 'required', 
            'alamat_sekolah'     => 'required', 
            'kompetisi_bakat'     => 'required', 
            'nama_ayah'     => 'required', 
            'ttl_ayah'     => 'required', 
            'agama_ayah'     => 'required', 
            'pekerjaan_ayah'     => 'required', 
            'alamat_ayah'     => 'required', 
            'no_ayah'     => 'required', 
            'nama_ibu'     => 'required', 
            'ttl_ibu'     => 'required', 
            'agama_ibu'     => 'required', 
            'pekerjaan_ibu'     => 'required', 
            'alamat_ibu'     => 'required', 
            'no_ibu'     => 'required', 
            'foto_kk'     => 'image', 
            'foto_rapot'     => 'image', 
            'foto_biodata_rapot'     => 'image', 
            'foto_siswa'     => 'image']);

             // Mengambil file yang diupload
                $uploaded_foto_kk = $request->file('foto_kk');
                // mengambil extension file
                $extensionFotoKk = $uploaded_foto_kk->getClientOriginalExtension();
                // membuat nama file random berikut extension
                $filenameFotoKk = str_random(40) . '.' . $extensionFotoKk;
                // menyimpan foto_kk ke folder public/foto_kk
                $destinationPathFotoKk = public_path() . DIRECTORY_SEPARATOR . 'foto_kk';
                $uploaded_foto_kk->move($destinationPathFotoKk, $filenameFotoKk);
                // mengisi field foto_kk di database kamar dengan filename yang baru dibuat

             // Mengambil file yang diupload
                $uploaded_foto_rapot = $request->file('foto_rapot');
                // mengambil extension file
                $extensionFotoRapot = $uploaded_foto_rapot->getClientOriginalExtension();
                // membuat nama file random berikut extension
                $filenameFotoRapot = str_random(40) . '.' . $extensionFotoRapot;
                // menyimpan foto_rapot ke folder public/foto_rapot
                $destinationPathFotoRapot = public_path() . DIRECTORY_SEPARATOR . 'foto_rapot';
                $uploaded_foto_rapot->move($destinationPathFotoRapot, $filenameFotoRapot);
                // mengisi field foto_rapot di database kamar dengan filename yang baru dibuat
 
             // Mengambil file yang diupload
                $uploaded_foto_biodata_rapot = $request->file('foto_biodata_rapot');
                // mengambil extension file
                $extensionFotoBioRapot = $uploaded_foto_biodata_rapot->getClientOriginalExtension();
                // membuat nama file random berikut extension
                $filenameFotoBioRapot = str_random(40) . '.' . $extensionFotoBioRapot;
                // menyimpan foto_biodata_rapot ke folder public/foto_biodata_rapot
                $destinationPathFotoBioRapot = public_path() . DIRECTORY_SEPARATOR . 'foto_biodata_rapot';
                $uploaded_foto_biodata_rapot->move($destinationPathFotoBioRapot, $filenameFotoBioRapot);
                // mengisi field foto_biodata_rapot di database kamar dengan filename yang baru dibuat 
 
             // Mengambil file yang diupload
                $uploaded_foto_siswa = $request->file('foto_siswa');
                // mengambil extension file
                $extensionFotoSiswa = $uploaded_foto_siswa->getClientOriginalExtension();
                // membuat nama file random berikut extension
                $filenameFotoSiswa = str_random(40) . '.' . $extensionFotoSiswa;
                // menyimpan foto_siswa ke folder public/foto_siswa
                $destinationPathFotoSiswa = public_path() . DIRECTORY_SEPARATOR . 'foto_siswa';
                $uploaded_foto_siswa->move($destinationPathFotoSiswa, $filenameFotoSiswa);
                // mengisi field foto_siswa di database kamar dengan filename yang baru dibuat 

          DataSiswa::create([ 
            'id_siswa'     => $id_user, 
            'nisn'     => $request->nisn, 
            'nomor_sttb'     => $request->nomor_sttb, 
            'nama'     => $request->nama, 
            'jenis_kelamin'     => $request->jenis_kelamin, 
            'nama_sekolah'     => $request->nama_sekolah, 
            'alamat_sekolah'     => $request->alamat_sekolah, 
            'kompetisi_bakat'     => $request->kompetisi_bakat, 
            'nama_ayah'     => $request->nama_ayah, 
            'ttl_ayah'     => $request->ttl_ayah, 
            'agama_ayah'     => $request->agama_ayah, 
            'pekerjaan_ayah'     => $request->pekerjaan_ayah, 
            'alamat_ayah'     => $request->alamat_ayah, 
            'no_ayah'     => $request->no_ayah, 
            'nama_ibu'     => $request->nama_ibu, 
            'ttl_ibu'     => $request->ttl_ibu, 
            'agama_ibu'     => $request->agama_ibu, 
            'pekerjaan_ibu'     => $request->pekerjaan_ibu, 
            'alamat_ibu'     => $request->alamat_ibu, 
            'no_ibu'     => $request->no_ibu, 
            'foto_kk'     => $filenameFotoKk,
            'foto_rapot'     => $filenameFotoRapot,
            'foto_biodata_rapot'     => $filenameFotoBioRapot,
            'foto_siswa'     => $filenameFotoSiswa
            ]);
 
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Pendaftran Anda Selesai, Terima Kasih."
            ]);
        return back() ;
    }

    public function blog()
    {
        return view('blog');
    }
}
