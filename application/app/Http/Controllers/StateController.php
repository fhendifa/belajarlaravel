<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $state = State::all();
        // return $kategori;
        return view('state.index', compact('state'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('state.add');
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
                // 'icon' => 'required',
                'state' => 'required|min:3|max:50'
            ],
            [
                'state.required' => 'Isi Yang Betul Lah :).',
                'state.min' => 'Min 3 Karakter',
                'state.max' => 'Max 25 Karatker'
            ]
        );

        // $img = $request->file('icon');
        // $nama_file = time(). "_". $img->getClientOriginalName();
        // $img->move('dist/img', $nama_file);

        State::create([
            // 'icon' => $nama_file,
            'state' => $request->state
        ]);
        return redirect('/state')->with('status', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\State  $states
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\State  $states
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        // return $category;
        return view('state.edit', compact('state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\States  $states
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
        // return $request;
        $request->validate(
            [
                // 'icon' => 'required',
                'state' => 'required|min:3|max:50'
            ],
            [
                'state.required' => 'Isi Yang Betul Lah :).',
                'state.min' => 'Min 3 Karakter',
                'state.max' => 'Max 25 Karatker'
            ]
        );

        // $img = $request->file('icon');
        // $nama_file = time(). "_". $img->getClientOriginalName();
        // $img->move('dist/img', $nama_file);

        State::where('id', $state->id)->update([
            // 'icon' => $nama_file,
            'state' => $request->state
        ]);
        return redirect('/state')->with('status', 'Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\State  $states
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        State::destroy('id', $state->id);
        return redirect('/state')->with('status', 'Berhasil Dihapus');
    }
}
