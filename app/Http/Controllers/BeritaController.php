<?php

namespace App\Http\Controllers;

use App\Models\tempekan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita=tempekan::all(); 
        $title = "Data Tempekan";
        return view('admin.berandaberita', compact ('title','berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Data Anggota";
        return view('admin.inputberita', compact ('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=[
            'required'=> 'Kolom :attribute Harus lengkap',
            'date'    => 'Kolom :attribute Haraus Tanggal',
            'numeric' => 'Kolom :attribute Harus Angka',
        ];
        $validasi=$request->validate([
            'nama'=>'required|unique:tempekans|max:255',
            'jabatan'=>'required',
            'keterangan'=>'required'
        ]);
        $validasi['id_anggota']=Auth::id();
        tempekan::create($validasi);
        return redirect('berita')->with('success', 'Data berhasil tersimpan');
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
        $berita=tempekan::find($id);
        $title = "Edit  Data Anggota";
        return view('admin.inputberita', compact ('title','berita'));
    }

    /**
     * Update the specified resource in storage.
     *s
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasi=$request->validate([
            'nama'=>'required',
            'jabatan'=>'required',
            'keterangan'=>'required'
        ]);
        $validasi['id_anggota']=Auth::id();
        tempekan::where('id', $id)->update($validasi);
        return redirect('berita')->with('success','Data Berhasil Ditambah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita=tempekan::find($id);
        if ($berita != null){

            tempekan::where('id', $id)->delete();
        }
        return redirect('berita')->with('success','Data Berhasil Dihapus');
    }
}
