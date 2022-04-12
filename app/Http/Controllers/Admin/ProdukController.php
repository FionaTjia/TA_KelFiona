<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Produk;
use Illuminate\Http\Request;

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
                ->orWhere('hargaJual_produk', 'LIKE', "%$keyword%")
                ->orWhere('modal_produk', 'LIKE', "%$keyword%")
                ->orWhere('id_category', 'LIKE', "%$keyword%")
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
        
        $requestData = $request->all();
        
        Produk::create($requestData);

        return redirect('admin/produk')->with('flash_message', 'Produk added!');
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
        
        $requestData = $request->all();
        
        $produk = Produk::findOrFail($id);
        $produk->update($requestData);

        return redirect('admin/produk')->with('flash_message', 'Produk updated!');
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
