<?php

namespace App\Http\Controllers;

use App\Models\Infokampus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfokampusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $infokampuses = Infokampus::all();
        # code...
        return view('admin.infokampus',compact('infokampuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $infokampuses = Infokampus::all();
        # code...
        return view('admin.infokampus');
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

        Infokampus::create($request->all());

        return redirect('admin/infokampus')->with('success','Kampus Sudah Terdaftar');




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


        // return view('admin.infokampus',compact('infokampuses'));

        return view('admin.editinfokampus',compact('infokampuses'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Infokampus $infokampuses)
    {
        //

        // $user = Auth::user();
        $infokampuses = Infokampus::findOrFail($id);
        // // return view('online-course.admin.editkelas',['kelas' => $kelas]);
        return view('admin.editinfokampus',compact('infokampuses'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infokampus $infokampuses, $id)
    {
        //


        if($request->hasFile('lambangkampus')){
            $filename = $request["lambangkampus"]->getClientOriginalName();

            if( Infokampus::find($id)->lambangkampus ){
                Storage::delete('/public/storage/infokampus/'.Infokampus::find($id)->lambangkampus);
            }
            $request["lambangkampus"]->storeAs('infokampus', $filename, 'public');
        }else{
            $filename=Infokampus::find($id)->lambangkampus;
        }



        if($request->hasFile('foto_tempat')){
            $namafile = $request["foto_tempat"]->getClientOriginalName();

            if( Infokampus::find($id)->foto_tempat ){
                Storage::delete('/public/storage/Infokampus/'.Infokampus::find($id)->foto_tempat);
            }
            $request["foto_tempat"]->storeAs('Infokampus', $namafile, 'public');
        }else{
            $namafile=Infokampus::find($id)->foto_tempat;
        }




        $infokampuses = Infokampus::where('id', $id)->update([
            'namakampus' => $request['namakampus'],
            'alamatkampus' => $request['alamatkampus'],
            'akreditasi' => $request['akreditasi'],
            'deskripsi_kampus' => $request['deskripsi_kampus'],
            'jumlah_mahasiswa' => $request['jumlah_mahasiswa'],
            'jumlah_dosen' => $request['jumlah_dosen'],
            'email' => $request['email'],
            'website' => $request['website'],
            'biaya_kuliah' => $request['biaya_kuliah'],
            'telepon' => $request['telepon'],
            'lambangkampus' => $filename,
            'foto_tempat' => $namafile,
        ]);

        // Session::flash('sukses','Data Sudah Terupdate');
        return redirect('admin/infokampus')->with('update-infokampus','Data Berhasil Terupdate');






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


        $infokampuses = Infokampus::findOrFail($id);
        $infokampuses->delete();
        return redirect('admin/infokampus')->with('hapus-infokampus','infokampus Sudah terhapus');


    }
}
