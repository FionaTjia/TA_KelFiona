<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $produk = Produk::where('id_produk', 'LIKE', "%$keyword%")
                ->orWhere('nama_produk', 'LIKE', "%$keyword%")
                ->orWhere('gambar_produk', 'LIKE', "%$keyword%")
                ->orWhere('hargaJual_produk', 'LIKE', "%$keyword%")
                ->orWhere('modal_produk', 'LIKE', "%$keyword%")
                ->orWhere('product_id_category', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $produk = Produk::latest()->paginate($perPage);
        }

        return view('admin.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_produk' => 'required|min:3|max:11',
            'nama_produk' => 'required|max:100',
            'hargaJual_produk' => 'required|max:100',
            'modal_produk' => 'required|max:100',
            'product_id_category' => 'required|min:3|max:11',
            ]);
        if ($validator->fails()) {
            return redirect('admin/produk')->withErrors($validator);
        } else {

            $produk = new Produk;
            $produk->id_produk = $request->input('id_produk');
            $produk->nama_produk = $request->input('nama_produk');
            $produk->hargaJual_produk = $request->input('hargaJual_produk');
            $produk->modal_produk = $request->input('modal_produk');
            $produk->product_id_category = $request->input('product_id_category');

            if ($request->hasfile('gambar_produk')) {
                $file = $request->file('gambar_produk');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' .$extention;
                $file->move('uploads/products/', $filename);
                $produk->gambar_produk = $filename;
            }
            $produk->save();
            return redirect('admin/produk')->with('flash_message', 'Produk added!');
        }
        
        

        // $requestData = $request->all();
        
        // Produk::create($requestData);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);

        return view('admin.produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);

        return view('admin.produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $produk = Produk::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'id_produk' => 'required|min:3|max:11',
            'nama_produk' => 'required|max:100',
            'hargaJual_produk' => 'required|max:100',
            'modal_produk' => 'required|max:100',
            'product_id_category' => 'required|min:3|max:11',
            ]);
        if ($validator->fails()) {
            return redirect('admin/produk')->withErrors($validator);
        } else {

            $produk->id_produk = $request->input('id_produk');
            $produk->nama_produk = $request->input('nama_produk');
            $produk->hargaJual_produk = $request->input('hargaJual_produk');
            $produk->modal_produk = $request->input('modal_produk');
            $produk->product_id_category = $request->input('product_id_category');
            
            if ($request->hasfile('gambar_produk')) {
                $destination = 'uploads/products/'.$produk->gambar_produk;

                if(File::exists($destination))
                {
                    File::delete($destination);
                }

                $file = $request->file('gambar_produk');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' .$extention;
                $file->move('uploads/products/', $filename);
                $produk->gambar_produk = $filename;
            }
            
            $produk->update();

            return redirect('admin/produk')->with('flash_message', 'Produk updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Produk::destroy($id);

        return redirect('admin/produk')->with('flash_message', 'Produk deleted!');
    }
}
