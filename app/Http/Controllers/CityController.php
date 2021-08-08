<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $city = City::all();
        // return $kategori;
        return view('city.index', compact('city'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $state = State::all();
        return view('city.add', compact('state'));
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
                'state' => 'required|min:1|max:50',
                'city' => 'required|min:3|max:25|unique:cities,city'
            ],
            [
                'state.required' => 'Isi Yang Betul Lah :).',
                'state.min' => 'Min 3 Karakter',
                'state.max' => 'Max 25 Karatker',
                'city.required' => 'Isi Yang Betul Lah :).',
                'city.min' => 'Min 3 Karakter',
                'city.max' => 'Max 25 Karatker'
            ]
        );

        // untuk memasukkan data ke table
        City::create([
            'state_id' => $request->state,
            'city' => $request->city
        ]);
        return redirect('/city')->with('status', 'Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        // return $category;
        $state = State::all();
        return view('city.edit', compact('city', 'state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        // return $city;
        $request->validate(
            [
                'state' => 'required|min:1|max:50',
                'city' => 'required|min:3|max:25'
            ],
            [
                'state.required' => 'Isi Yang Betul Lah :).',
                'state.min' => 'Min 3 Karakter',
                'state.max' => 'Max 25 Karatker',
                'city.required' => 'Isi Yang Betul Lah :).',
                'city.min' => 'Min 3 Karakter',
                'city.max' => 'Max 25 Karatker'
            ]
        );

        // untuk memasukkan data ke table
        City::where('id', $city->id)->update
        ([
            'state_id' => $request->state,
            'city' => $request->city
        ]);
        return redirect('/city')->with('status', 'Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        // return $product;
        City::destroy('id', $city->id);
        return redirect('/city')->with('status', 'Berhasil Dihapus');
    }
}
