<?php

namespace App\Http\Controllers;

use App\Models\Artikelblog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ArtikelblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $artikelblogs = Artikelblog::all();
        return view('admin.artikelblog',compact('artikelblogs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.artikelblog',compact('artikelblogs'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        Artikelblog::create($request->all());

        return redirect('admin/artikelblog')->with('success','Kampus Sudah Terdaftar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikelblog  $artikelblog
     * @return \Illuminate\Http\Response
     */
    public function show(Artikelblog $artikelblogs)
    {
        //
        return view('admin.editartikelblog',compact('artikelblogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikelblog  $artikelblog
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Artikelblog $artikelblogs)
    {
        //

           // $user = Auth::user();
           $artikelblogs = Artikelblog::findOrFail($id);
           // // return view('online-course.admin.editkelas',['kelas' => $kelas]);
           return view('admin.editartikelblog',compact('artikelblogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikelblog  $artikelblog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikelblog $artikelblogs, $id)
    {
        //




        if($request->hasFile('foto_artikel')){
            $filename = $request["foto_artikel"]->getClientOriginalName();

            if( Artikelblog::find($id)->foto_artikel ){
                Storage::delete('/public/storage/Artikelblog/'.Artikelblog::find($id)->foto_artikel);
            }
            $request["foto_artikel"]->storeAs('Artikelblog', $filename, 'public');
        }else{
            $filename=Artikelblog::find($id)->foto_artikel;
        }




        $artikelblogs = Artikelblog::where('id', $id)->update([
            'judulartikel' => $request['judulartikel'],
            'foto_artikel' => $filename,
            'isiartikel' => $request['isiartikel'],
            'katakunciartikel' => $request['katakunciartikel'],
            'penulisartikel' => $request['penulisartikel'],
            'kategori_artikel' => $request['kategori_artikel'],



        ]);

        // Session::flash('sukses','Data Sudah Terupdate');
        return redirect('admin/artikelblog')->with('update-Artikelblog','Data Berhasil Terupdate');






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikelblog  $artikelblog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikelblog $artikelblog, $id)
    {
        //
        $artikelblogs = Artikelblog::findOrFail($id);
        $artikelblogs->delete();
        return redirect('admin/artikelblog')->with('hapus-Artikelblog','Artikelblog Sudah terhapus');
    }
}
