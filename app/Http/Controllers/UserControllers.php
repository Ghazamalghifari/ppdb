<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Database;
use App\User;
use Auth;
use Session;

class UserControllers extends Controller
{
    //
    public function index(Request $request, Builder $htmlBuilder)
    {
        //
        if ($request->ajax()) {
            # code...
            $user = User::select(['id','judul_artikel','gambar_artikel','isi_artikel','created_at']);
            return Datatables::of($user)->addColumn('action', function($users){
                    return view('datatable._action', [
                        'model'     => $users,
                        'form_url'  => route('user.destroy', $users->id),
                        'edit_url'  => route('user.edit', $users->id),
                        'confirm_message'   => 'Yakin Mau Menghapus user ' . $users->nama . '?'
                        ]);
                })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'judul_artikel', 'name' => 'judul_artikel', 'title' => 'Judul Artikel'])
        ->addColumn(['data' => 'created_at', 'name' => 'created_at', 'title' => 'Tanggal Buat'])  
        ->addColumn(['data' => 'action', 'name' => 'action', 'title' => '', 'orderable' => false, 'searchable'=>false]);
        return view('user.index')->with(compact('html'));
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
            'gambar_artikel'     => 'required', 
            'isi_artikel'     => 'required'
            ]);

         $post = Post::create([ 
            'judul_artikel'=>$request->judul_artikel, 
            'gambar_artikel'=>$request->gambar_artikel, 
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
            'gambar_artikel'     => 'required', 
            'isi_artikel'     => 'required'
            ]);

        Post::where('id', $id) ->update([
            'judul_artikel'=>$request->judul_artikel, 
            'gambar_artikel'=>$request->gambar_artikel, 
            'isi_artikel'=>$request->isi_artikel
        ]);

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
