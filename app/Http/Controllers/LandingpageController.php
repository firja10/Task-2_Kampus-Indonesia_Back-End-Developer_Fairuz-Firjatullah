<?php

namespace App\Http\Controllers;

use App\Models\Artikelblog;
use Illuminate\Http\Request;
use App\Models\Infokampus;
use App\Models\Artikelinformasijurusan;
use App\Models\Artikelbeasiswamagang;

class LandingpageController extends Controller
{
    //

public function landing()
{
    # code...
    $infokampuses = Infokampus::all();
    return view('landing',compact('infokampuses'));
}

public function informasikampus()
{
    # code...
    $infokampuses = Infokampus::all();
    return view('informasikampus',compact('infokampuses'));
}

public function informasikampusspesifik($id, Infokampus $infokampuses)
{
      // $user = Auth::user();
      $infokampuses = Infokampus::findOrFail($id);
      // // return view('online-course.admin.editkelas',['kelas' => $kelas]);
      return view('informasikampusspesifik',compact('infokampuses'));

}




public function informasijurusan()
{
    # code...
    $artikelinformasijurusans = Artikelinformasijurusan::all();
    return view('artikelinformasijurusan',compact('artikelinformasijurusans'));
}

public function informasijurusanspesifik($id, Artikelinformasijurusan $artikelinformasijurusans)
{
      // $user = Auth::user();
      $artikelinformasijurusans = Artikelinformasijurusan::findOrFail($id);
      // // return view('online-course.admin.editkelas',['kelas' => $kelas]);
      return view('artikelinformasijurusanspesifik',compact('artikelinformasijurusans'));

}


public function artikelblog()
{
    # code...
    $artikelblogs = Artikelblog::all();
    return view('artikel-blog',compact('artikelblogs'));
}


public function artikelblogspesifik($id, Artikelblog $artikelblogs)
{
    # code...
    $artikelblogs = Artikelblog::findOrFail($id);
    return view('artikel-blogspesifik',compact('artikelblogs'));
}


public function artikelbeasiswamagang()
{
    # code...
    $artikelbeasiswamagangs = Artikelbeasiswamagang::all();
    return view('artikel-beasiswamagang',compact('artikelbeasiswamagangs'));
}



public function artikelbeasiswamagangspesifik($id, Artikelbeasiswamagang $artikelbeasiswamagangs)
{
    # code...
    $artikelbeasiswamagangs = Artikelbeasiswamagang::findOrFail($id);
    return view('artikel-beasiswamagangspesifik',compact('artikelbeasiswamagangs'));
}






}
