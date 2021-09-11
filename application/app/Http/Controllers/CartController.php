<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Cart;
use App\Models\Kurir;
use App\Models\Product;
use App\Models\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::where('status', 0)->where('user_id', Auth::user()->id)
        ->get();    
        // return $kategori;
        $subtotal = Cart::where('status', 0)->sum('subtotal');
        $kurir = Kurir::all();
        $bank = Bank::all();
        $number = Number::where('id', 1)->get();
        $angka = ($number[0]->angka)+1;
        $date = date('dmY');
        $invoice = "INV-PK-$date-$angka";
        return view('keranjang.index', compact('cart', 'subtotal', 'kurir', 'bank'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keranjang.add');
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
                'quantity' => 'required|numeric|min:1'
            ],
            [

                'quantity.required' => 'Isi Yang Betul Lah :).',
                'quantity.numeric' => 'Harus Angka'
            ]
        );

        $product = Product::where('id', $request->product_id)->get();
        $total = $product[0]->harga_barang * $request->quantity ;
        $keranjang = Cart::where('user_id', Auth::user()->id)
        ->where('status', 0)->get();

        foreach($keranjang as $item)
        {
            if($request->product_id == $item->product_id)
            {
                $product = Product::where('id', $item->product_id)->first();
                Cart::where('product_id', $item->product_id)->update([
                    'quantity' => $item->quantity + $request->quantity,
                    'subtotal' => $product->harga_barang * ($item->quantity + $request->quantity)
                ]);
                return redirect()->back();
            }
        }
        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'subtotal' => $total,
            'aksi' => 0
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        Cart::destroy('id', $cart->id);
        return redirect('/cart')->with('status', 'berhasil dihapus');
    }
}
