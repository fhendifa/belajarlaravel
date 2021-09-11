<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Monolog\Handler\ElasticaHandler;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('product.add', compact('category'));
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
                'category' => 'required|min:1|max:25',
                'name' => 'required|min:3|max:25|unique:products,nama_barang',
                'harga' => 'required|numeric',
                'stock' => 'required|numeric',
                'deskripsi' => 'required|min:3|max:500'
            ],
            [
                'category.required' => 'Isi Yang Betul Lah :).',
                'category.min' => 'Min 3 Karakter',
                'category.max' => 'Max 25 Karatker',
                'name.required' => 'Isi Yang Betul Lah :).',
                'name.min' => 'Min 3 Karakter',
                'name.max' => 'Max 25 Karatker',
                'harga.required' => 'Isi Yang Betul Lah :).',
                'harga.numeric' => 'Harus Angka',
                'stock.required' => 'Isi Yang Betul Lah :).',
                'stock.numeric' => 'Harus Angka',
                'deskripsi.required' => 'Isi Yang Betul Lah :).',
                'deskripsi.min' => 'Min 3 Karakter',
                'deskripsi.max' => 'Max 25 Karatker',
                'name.required' => 'Nama harus diisi',
                'name.unique' => 'Nama sudah ada coy'
            ]
        );

        // untuk memasukkan data ke table
        Product::create([
            'category_id' => $request->category,
            'nama_barang' => $request->name,
            'harga_barang' => $request->harga,
            'stock_barang' => $request->stock,
            'deskripsi_barang' => $request->deskripsi,
        ]);
        $data = Product::where('nama_barang', $request->name)->get();
        return view('product.addPhoto', compact('data'));
        // return redirect('/product')->with('status', 'Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // return $category;
        $category = Category::all();
        return view('product.edit', compact('category', 'product'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // return $request;
        $request->validate(
            [
                'photo' => 'required',
                'category' => 'required|min:1|max:25',
                'name' => 'required|min:3|max:25',
                'harga' => 'required|numeric',
                'stock' => 'required|numeric',
                'deskripsi' => 'required|min:3|max:500'
            ],
            [
                'category.required' => 'Isi Yang Betul Lah :).',
                'category.min' => 'Min 3 Karakter',
                'category.max' => 'Max 25 Karatker',
                'name.required' => 'Isi Yang Betul Lah :).',
                'name.min' => 'Min 3 Karakter',
                'name.max' => 'Max 25 Karatker',
                'harga.required' => 'Isi Yang Betul Lah :).',
                'harga.numeric' => 'Harus Angka',
                'stock.required' => 'Isi Yang Betul Lah :).',
                'stock.numeric' => 'Harus Angka',
                'deskripsi.required' => 'Isi Yang Betul Lah :).',
                'deskripsi.min' => 'Min 3 Karakter',
                'deskripsi.max' => 'Max 25 Karatker'
                
            ]
        );

        $img = $request->file('photo');
        $nama_file = time(). "_". $img->getClientOriginalName();
        $img->move('dist/img', $nama_file);

        // untuk memasukkan data ke table
        Product::where('id', $product->id)->update
        ([
            'category_id' => $request->category,
            'nama_barang' => $request->name,
            'harga_barang' => $request->harga,
            'stock_barang' => $request->stock,
            'deskripsi_barang' => $request->deskripsi,
        ]);
        Photo::where('product_id', $product->id)->update
        ([
            'nama_foto' =>$nama_file,
            // 'status' =>$request->status,
        ]);
        return redirect('/product')->with('status', 'Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // return $product;
        Product::destroy('id', $product->id);
        return redirect('/product')->with('status', 'Berhasil Dihapus');
    
    }

    public function createPhoto()
    {
        return view('product.addPhoto');
    }

    public function storePhoto(Request $request)
    {
        $img = $request->file('photo');
        $nama_file = time(). "_". $img->getClientOriginalName();
        $img->move('dist/img', $nama_file);
        Photo::create([
            'nama_foto' =>$nama_file,
            // 'status' =>$request->status,
            'product_id' =>$request->id
        ]);

        return redirect('/product')->with('status', 'Berhasil Berhasil Hore!!!');
    }

    public function promo(Product $product)
    {
        // if($product->promo==1)
        // {
        //     $promo=0;
        // }
        // else
        // {
        //     $promo=1;
        // }
        $promo=$product->promo==1 ? 0 : 1;
        Product::where('id', $product->id)->update(['promo'=>$promo]);
        return redirect()->back();
    }

    public function rekomendasi(Product $product)
    {
        $rekomendasi=$product->rekomendasi==1 ? 0 : 1;
        Product::where('id', $product->id)->update(['rekomendasi'=>$rekomendasi]);
        return redirect()->back();
    }
}
