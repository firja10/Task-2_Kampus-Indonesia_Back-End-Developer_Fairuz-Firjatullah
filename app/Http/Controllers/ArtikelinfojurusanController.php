<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Artikelinformasijurusan;

class ArtikelinfojurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $artikelinformasijurusans = Artikelinformasijurusan::all();
        return view('admin.artikelinfojurusan',compact('artikelinformasijurusans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.artikelinfojurusan');
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

       Artikelinformasijurusan::create($request->all());

        return redirect('admin/artikelinfojurusan')->with('success','Kampus Sudah Terdaftar');
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
        return view('admin.editartikelinfojurusan',compact('artikelinformasijurusans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Artikelinformasijurusan $artikelinformasijurusans)
    {
        //

        // $user = Auth::user();
        $artikelinformasijurusans = Artikelinformasijurusan::findOrFail($id);
        // // return view('online-course.admin.editkelas',['kelas' => $kelas]);
        return view('admin.editartikelinfojurusan',compact('artikelinformasijurusans'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Artikelinformasijurusan $artikelinformasijurusans)
    {
        //



        if($request->hasFile('lambangjurusan')){
            $filename = $request["lambangjurusan"]->getClientOriginalName();

            if( Artikelinformasijurusan::find($id)->lambangjurusan ){
                Storage::delete('/public/storage/artikelinformasijurusan/'.Artikelinformasijurusan::find($id)->lambangjurusan);
            }
            $request["lambangjurusan"]->storeAs('Artikelinformasijurusan', $filename, 'public');
        }else{
            $filename=Artikelinformasijurusan::find($id)->lambangjurusan;
        }



        if($request->hasFile('lambangprospek_kerja')){
            $namafile = $request["lambangprospek_kerja"]->getClientOriginalName();

            if( Artikelinformasijurusan::find($id)->lambangprospek_kerja ){
                Storage::delete('/public/storage/artikelinformasijurusan/'.Artikelinformasijurusan::find($id)->lambangprospek_kerja);
            }
            $request["lambangprospek_kerja"]->storeAs('Artikelinformasijurusan', $namafile, 'public');
        }else{
            $namafile=Artikelinformasijurusan::find($id)->lambangprospek_kerja;
        }




        $artikelinformasijurusans = Artikelinformasijurusan::where('id', $id)->update([
            'namajurusan' => $request['namajurusan'],
            'lambangjurusan' => $filename,
            'deskripsi_jurusan' => $request['deskripsi_jurusan'],
            'keahlian_dan_pengetahuan' => $request['keahlian_dan_pengetahuan'],
            'prospek_kerja' => $request['prospek_kerja'],
            'lambangprospek_kerja' => $namafile,



        ]);

        // Session::flash('sukses','Data Sudah Terupdate');
        return redirect('admin/artikelinfojurusan')->with('update-Artikelinformasijurusan','Data Berhasil Terupdate');





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

        $artikelinformasijurusans = Artikelinformasijurusan::findOrFail($id);
        $artikelinformasijurusans->delete();
        return redirect('admin/artikelinfojurusan')->with('hapus-Artikelinformasijurusan','Artikelinformasijurusan Sudah terhapus');
    }
}
