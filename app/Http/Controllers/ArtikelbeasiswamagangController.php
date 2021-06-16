<?php

namespace App\Http\Controllers;

use App\Models\Artikelbeasiswamagang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelbeasiswamagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $artikelbeasiswamagangs = Artikelbeasiswamagang::all();
        return view('admin.artikelbeasiswamagang',compact('artikelbeasiswamagangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.artikelbeasiswamagang',compact('artikelbeasiswamagangs'));
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
        Artikelbeasiswamagang::create($request->all());

        return redirect('admin/artikelbeasiswamagang')->with('success','Kampus Sudah Terdaftar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikelbeasiswamagang  $artikelbeasiswamagang
     * @return \Illuminate\Http\Response
     */
    public function show(Artikelbeasiswamagang $artikelbeasiswamagangs)
    {
        //
        return view('admin.editartikelbeasiswamagang',compact('artikelbeasiswamagangs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikelbeasiswamagang  $artikelbeasiswamagang
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Artikelbeasiswamagang $artikelbeasiswamagangs)
    {
        //
            // $user = Auth::user();
            $artikelbeasiswamagangs = Artikelbeasiswamagang::findOrFail($id);
            // // return view('online-course.admin.editkelas',['kelas' => $kelas]);
            return view('admin.editartikelbeasiswamagang',compact('artikelbeasiswamagangs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikelbeasiswamagang  $artikelbeasiswamagang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikelbeasiswamagang $artikelbeasiswamagangs, $id)
    {
        //

        if($request->hasFile('foto_institusi')){
            $filename = $request["foto_institusi"]->getClientOriginalName();

            if( Artikelbeasiswamagang::find($id)->foto_institusi ){
                Storage::delete('/public/storage/Artikelbeasiswamagang/'.Artikelbeasiswamagang::find($id)->foto_institusi);
            }
            $request["foto_institusi"]->storeAs('Artikelbeasiswamagang', $filename, 'public');
        }else{
            $filename=Artikelbeasiswamagang::find($id)->foto_institusi;
        }




        $artikelbeasiswamagangs = Artikelbeasiswamagang::where('id', $id)->update([
            'namamagangbeasiswa' => $request['namamagangbeasiswa'],
            'foto_institusi' => $filename,
            'deskripsi' => $request['deskripsi'],
            'persyaratan' => $request['persyaratan'],
            'partisipan' => $request['partisipan'],
            'tanggal_mulai' => $request['tanggal_mulai'],
            'tanggal_akhir' => $request['tanggal_akhir'],
            'timeline' => $request['timeline'],
            'telepon' => $request['telepon'],
            'instagram' => $request['instagram'],

        ]);

        return redirect('admin/artikelbeasiswamagang')->with('update-Artikelbeasiswamagang','Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikelbeasiswamagang  $artikelbeasiswamagang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Artikelbeasiswamagang $artikelbeasiswamagangs)
    {
        //

        $artikelbeasiswamagangs = Artikelbeasiswamagang::findOrFail($id);
        $artikelbeasiswamagangs->delete();
        return redirect('admin/artikelbeasiswamagang')->with('hapus-Artikelbeasiswamagang','Artikelbeasiswamagang Sudah terhapus');
    }
}
