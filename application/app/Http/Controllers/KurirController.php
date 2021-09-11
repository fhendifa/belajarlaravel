<?php

namespace App\Http\Controllers;

use App\Models\Kurir;
use Illuminate\Http\Request;

class KurirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurir = Kurir::all();
        // return $kategori;
        return view('kurir.index', compact('kurir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kurir.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate(
            [
                'nama' => 'required|min:3|max:25',
                'ongkir' => 'required|min:3|max:25'
            ],
            [
                'nama.required' => ' Isi Yang Betul Lah :)',
                'nama.min' => 'Min 3 Karakter',
                'nama.max' => 'Max 25 Karatker',
                'ongkir.required' => ' Isi Yang Betul Lah :)',
                'ongkir.min' => 'Min 3 Karakter',
                'ongkir.max' => 'Max 25 Karatker'
            ]
        );

        // $img = $request->file('icon');
        // $nama_file = time(). "_". $img->getClientOriginalName();
        // $img->move('dist/img', $nama_file);

        Kurir::create([
            // 'icon' => $nama_file,
            'nama_kurir' => $request->nama,
            'ongkir' => $request->ongkir
        ]);
        return redirect('/kurir')->with('status', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kurir  $kurir
     * @return \Illuminate\Http\Response
     */
    public function show(Kurir $kurir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kurir  $kurir
     * @return \Illuminate\Http\Response
     */
    public function edit(Kurir $kurir)
    {
        // return $category;
        return view('kurir.edit', compact('kurir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kurir  $kurir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kurir $kurir)
    {
        // return $request;
        $request->validate(
            [
                // 'icon' => 'required',
                'nama' => 'required|min:3|max:25',
                'ongkir' => 'required|min:3|max:25'
            ],
            [
                'nama.required' => ' Isi Yang Betul Lah :)',
                'nama.min' => 'Min 3 Karakter',
                'nama.max' => 'Max 25 Karatker',
                'ongkir.required' => ' Isi Yang Betul Lah :)',
                'ongkir.min' => 'Min 3 Karakter',
                'ongkir.max' => 'Max 25 Karatker'
            ]
        );

        // $img = $request->file('icon');
        // $nama_file = time(). "_". $img->getClientOriginalName();
        // $img->move('dist/img', $nama_file);

        Kurir::where('id', $kurir->id)->update([
            // 'icon' => $nama_file,
            'nama_kurir' => $request->nama,
            'ongkir' => $request->ongkir
        ]);
        return redirect('/kurir')->with('status', 'Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kurir  $kurir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kurir $kurir)
    {
        Kurir::destroy('id', $kurir->id);
        return redirect('/kurir')->with('status', 'Berhasil Dihapus');
    }
}
