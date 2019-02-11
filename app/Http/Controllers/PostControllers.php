<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Database;
use App\Post;
use Auth;
use Session; 
use File;  

class PostControllers extends Controller
{
    public function index(Request $request, Builder $htmlBuilder)
    {
        //
        if ($request->ajax()) {
            # code...
            $post = Post::select(['id','judul_artikel','gambar_artikel','isi_artikel','created_at']);
            return Datatables::of($post)->addColumn('action', function($posts){
                    return view('datatable._action', [
                        'model'     => $posts,
                        'form_url'  => route('post.destroy', $posts->id),
                        'edit_url'  => route('post.edit', $posts->id),
                        'confirm_message'   => 'Yakin Mau Menghapus post ' . $posts->judul_artikel . '?'
                        ]);
                })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'judul_artikel', 'name' => 'judul_artikel', 'title' => 'Judul Artikel'])
        ->addColumn(['data' => 'created_at', 'name' => 'created_at', 'title' => 'Tanggal Buat'])  
        ->addColumn(['data' => 'action', 'name' => 'action', 'title' => '', 'orderable' => false, 'searchable'=>false]);
        return view('post.index')->with(compact('html'));
    }
       public function create()
    {
        //
        return view('post.create');
    }
      public function store(Request $request)
    {
        // 
         $this->validate($request, [ 
            'judul_artikel'     => 'required', 
            'gambar_artikel'     => 'image', 
            'isi_artikel'     => 'required'
            ]);

             // Mengambil file yang diupload
                $uploaded_gambar_artikel = $request->file('gambar_artikel');
                // mengambil extension file
                $extensionGambarArtikel = $uploaded_gambar_artikel->getClientOriginalExtension();
                // membuat nama file random berikut extension
                $filenameGambarArtikel = str_random(40) . '.' . $extensionGambarArtikel;
                // menyimpan gambar_artikel ke folder public/gambar_artikel
                $destinationPathGambarArtikel = public_path() . DIRECTORY_SEPARATOR . 'gambar_artikel';
                $uploaded_gambar_artikel->move($destinationPathGambarArtikel, $filenameGambarArtikel);
                // mengisi field gambar_artikel di database kamar dengan filename yang baru dibuat

         $post = Post::create([ 
            'judul_artikel'=>$request->judul_artikel, 
            'gambar_artikel'=>$filenameGambarArtikel, 
            'isi_artikel'=>$request->isi_artikel]);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menambah Artikel $post->judul_artikel"
            ]);
        return redirect()->route('post.index');
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
        $post = Post::find($id);
        return view('post.edit')->with(compact('post')); 
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
            'judul_artikel'     => 'required',  
            'isi_artikel'     => 'required'
            ]);

            $post = Post::find($id);
          

    if ($request->hasFile('gambar_artikel')) {

             // Mengambil file yang diupload
                $uploaded_gambar_artikel = $request->file('gambar_artikel');
                // mengambil extension file
                $extensionGambarArtikel = $uploaded_gambar_artikel->getClientOriginalExtension();
                // membuat nama file random berikut extension
                $filenameGambarArtikel = str_random(40) . '.' . $extensionGambarArtikel;
                // menyimpan gambar_artikel ke folder public/gambar_artikel
                $destinationPathGambarArtikel = public_path() . DIRECTORY_SEPARATOR . 'gambar_artikel';
                $uploaded_gambar_artikel->move($destinationPathGambarArtikel, $filenameGambarArtikel);

                Post::where('id', $id) ->update([
                    'judul_artikel'=>$request->judul_artikel, 
                    'gambar_artikel'=>$filenameGambarArtikel, 
                    'isi_artikel'=>$request->isi_artikel
                ]);

                if ($post->gambar_artikel){
                    $old_gambar_artikel = $post->gambar_artikel;
                    $filepath = public_path() . DIRECTORY_SEPARATOR . 'gambar_artikel' . DIRECTORY_SEPARATOR . $post->gambar_artikel;

                    try {
                        File::delete($filepath);
                    }   catch (FileNotFoundException $e) {
                        //File sudah di hapus/tidak ada
                    }
                } 
        }

 
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Artikel $request->judul_artikel"
            ]);
        return redirect()->route('post.index');
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

        $post = Post::find($id);
        if ($post->gambar_artikel){
                    $old_gambar_artikel = $post->gambar_artikel;
                    $filepath = public_path() . DIRECTORY_SEPARATOR . 'gambar_artikel' . DIRECTORY_SEPARATOR . $post->gambar_artikel;

                    try {
                        File::delete($filepath);
                    }   catch (FileNotFoundException $e) {
                        //File sudah di hapus/tidak ada
                    }
                } 
        if(!Post::destroy($id)) 
        {
            return redirect()->back();
        }
        else{
        Session:: flash("flash_notification", [
            "level"=>"danger",
            "message"=>"Post Berhasil Di Hapus"
            ]);
        return redirect()->route('post.index');
        }
    }
}
