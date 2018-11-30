<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Database;
use App\Siswa;
use Auth;
use Session;

class SiswaController extends Controller
{

    public function index(Request $request, Builder $htmlBuilder)
    {
        //
        if ($request->ajax()) {
            # code...
            $siswa = Siswa::select(['id','nisn','nama','kelas','ttl','alamat','jurusan','keahlian','instragram','email','facebook','prestasi']);
            return Datatables::of($siswa)->addColumn('action', function($siswas){
                    return view('datatable._action', [
                        'model'     => $siswas,
                        'form_url'  => route('siswa.destroy', $siswas->id),
                        'edit_url'  => route('siswa.edit', $siswas->id),
                        'confirm_message'   => 'Yakin Mau Menghapus Siswa ' . $siswas->nama . '?'
                        ]);
                })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'nisn', 'name' => 'nisn', 'title' => 'NISN'])
        ->addColumn(['data' => 'nama', 'name' => 'nama', 'title' => 'Nama']) 
        ->addColumn(['data' => 'jurusan', 'name' => 'jurusan', 'title' => 'Jurusan']) 
        ->addColumn(['data' => 'ttl', 'name' => 'ttl', 'title' => 'Tempat Tanggal Lahir'])
        ->addColumn(['data' => 'action', 'name' => 'action', 'title' => '', 'orderable' => false, 'searchable'=>false]);
        return view('siswa.index')->with(compact('html'));
    }
       public function create()
    {
        //
        return view('siswa.create');
    }
      public function store(Request $request)
    {
        // 
         $this->validate($request, [ 
            'nisn'     => 'required', 
            'nama'     => 'required', 
            'kelas'     => 'required', 
            'ttl'     => 'required', 
            'alamat'=> 'max:225',
            'jurusan'     => 'required', 
            'keahlian'     => 'required', 
            'instragram'     => 'required', 
            'email'     => 'required', 
            'facebook'     => 'required', 
            'prestasi'     => 'required', 
            ]);
         $siswa = Siswa::create([ 
            'nisn'=>$request->nisn, 
            'nama'=>$request->nama, 
            'kelas'=>$request->kelas, 
            'ttl'=>$request->ttl, 
            'alamat'=>$request->alamat, 
            'jurusan'=>$request->jurusan, 
            'keahlian'=>$request->keahlian, 
            'instragram'=>$request->instragram,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'prestasi'=>$request->prestasi]);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menambah Siswa $siswa->nama"
            ]);
        return redirect()->route('siswa.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $siswa = Siswa::find($id);
        return view('siswa.edit')->with(compact('siswa')); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 
         $this->validate($request, [
            'nisn'     => 'required', 
            'nama'     => 'required', 
            'kelas'     => 'required', 
            'ttl'     => 'required', 
            'alamat'=> 'max:225',
            'jurusan'     => 'required', 
            'keahlian'     => 'required', 
            'instragram'     => 'required', 
            'email'     => 'required', 
            'facebook'     => 'required', 
            'prestasi'     => 'required', 
            ]);

        Siswa::where('id', $id) ->update([
            'nisn'=>$request->nisn, 
            'nama'=>$request->nama, 
            'kelas'=>$request->kelas, 
            'ttl'=>$request->ttl, 
            'alamat'=>$request->alamat, 
            'jurusan'=>$request->jurusan, 
            'keahlian'=>$request->keahlian, 
            'instragram'=>$request->instragram,
            'email'=>$request->email,
            'facebook'=>$request->facebook,
            'prestasi'=>$request->prestasi
        ]);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Siswa $request->nama"
            ]);
        return redirect()->route('siswa.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       
        if(!Siswa::destroy($id)) 
        {
            return redirect()->back();
        }
        else{
        Session:: flash("flash_notification", [
            "level"=>"danger",
            "message"=>"Siswa Berhasil Di Hapus"
            ]);
        return redirect()->route('siswa.index');
        }
    }
}
