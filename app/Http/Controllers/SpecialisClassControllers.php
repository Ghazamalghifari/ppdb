<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Database;
use App\SpecialisClass;
use Auth;
use Session; 
use File;  

class SpecialisClassControllers extends Controller
{
    //
    public function index(Request $request, Builder $htmlBuilder)
    {
        //
        if ($request->ajax()) {
            # code...
            $specialis_class = SpecialisClass::select(['id','nama_class','isi_class']);
            return Datatables::of($specialis_class)->addColumn('action', function($specialis_classs){
                    return view('specialis_class._action', [
                        'edit_url'  => route('specialis_class.edit', $specialis_classs->id)
                        ]);
                })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'nama_class', 'name' => 'nama_class', 'title' => 'Nama Class'])  
        ->addColumn(['data' => 'action', 'name' => 'action', 'title' => '', 'orderable' => false, 'searchable'=>false]);
        return view('specialis_class.index')->with(compact('html'));
    }

    public function edit($id)
    {
        //
        $specialis_class = SpecialisClass::find($id);
        return view('specialis_class.edit')->with(compact('specialis_class')); 
    }

    public function update(Request $request, $id)
    {
        // 
         $this->validate($request, [ 
            'isi_class'     => 'required'
            ]);

            $specialis_class = SpecialisClass::find($id);

                SpecialisClass::where('id', $id) ->update([ 
                    'isi_class'=>$request->isi_class
                ]);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Specialis Class $specialis_class->nama_class"
            ]);
        return redirect()->route('specialis_class.index');
    }
}
