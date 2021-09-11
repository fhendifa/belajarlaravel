<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bank = Bank::all();
        // return $kategori;
        return view('bank.index', compact('bank'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bank.add');
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
                'rek' => 'required|numeric',
                'nama' => 'required|min:3|max:50'
            ],
            [
                'rek.required' => 'Isi Yang Betul Lah :).',
                'rek.numeric' => 'Harus Angka',
                'nama.required' => ' Isi Yang Betul Lah :)',
                'nama.min' => 'Min 3 Karakter',
                'nama.max' => 'Max 25 Karatker'
            ]
        );

        // $img = $request->file('icon');
        // $nama_file = time(). "_". $img->getClientOriginalName();
        // $img->move('dist/img', $nama_file);

        Bank::create([
            // 'icon' => $nama_file,
            'no_rek' => $request->rek,
            'nama_bank' => $request->nama
        ]);
        return redirect('/bank')->with('status', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(Bank $bank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $bank)
    {
        // return $category;
        return view('bank.edit', compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bank $bank)
    {
        // return $request;
        $request->validate(
            [
                // 'icon' => 'required',
                'rek' => 'required|numeric',
                'nama' => 'required|min:3|max:50'
            ],
            [
                'rek.required' => 'Isi Yang Betul Lah :).',
                'rek.numeric' => 'Harus Angka',
                'nama.required' => ' Isi Yang Betul Lah :)',
                'name.min' => 'Min 3 Karakter',
                'name.max' => 'Max 25 Karatker'
            ]
        );

        // $img = $request->file('icon');
        // $nama_file = time(). "_". $img->getClientOriginalName();
        // $img->move('dist/img', $nama_file);

        Bank::where('id', $bank->id)->update([
            // 'icon' => $nama_file,
            'no_rek' => $request->rek,
            'nama_bank' => $request->nama
        ]);
        return redirect('/bank')->with('status', 'Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bank $bank)
    {
        Bank::destroy('id', $bank->id);
        return redirect('/bank')->with('status', 'Berhasil Dihapus');
    }
}
