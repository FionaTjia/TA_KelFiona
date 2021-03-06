<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SalesController extends Controller
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
            $sales = Sale::where('id_sales', 'LIKE', "%$keyword%")
                ->orWhere('id_produk', 'LIKE', "%$keyword%")
                ->orWhere('id_konsumen', 'LIKE', "%$keyword%")
                ->orWhere('jumlah_sales', 'LIKE', "%$keyword%")
                ->orWhere('total_harga_sales', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $sales = Sale::latest()->paginate($perPage);
        }

        return view('admin.sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.sales.create');
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
            'id_sales' => 'required|min:3|max:11',
            'id_produk' => 'required|min:3|max:11',
            'id_konsumen' => 'required|min:3|max:11',
            'jumlah_sales' => 'required|max:100',
            'total_harga_sales' => 'required|max:100',
            ]);
        if ($validator->fails()) {
            return redirect('admin/sales')->withErrors($validator);
        } else {
            $requestData = $request->all();
            
            Sale::create($requestData);

            return redirect('admin/sales')->with('flash_message', 'Sale added!');
        }
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
        $sale = Sale::findOrFail($id);

        return view('admin.sales.show', compact('sale'));
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
        $sale = Sale::findOrFail($id);

        return view('admin.sales.edit', compact('sale'));
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
        $validator = Validator::make($request->all(), [
            'id_sales' => 'required|min:3|max:11',
            'id_produk' => 'required|min:3|max:11',
            'id_konsumen' => 'required|min:3|max:11',
            'jumlah_sales' => 'required|max:100',
            'total_harga_sales' => 'required|max:100',
            ]);
        if ($validator->fails()) {
            return redirect('admin/sales')->withErrors($validator);
        } else {   
            $requestData = $request->all();
            
            $sale = Sale::findOrFail($id);
            $sale->update($requestData);

            return redirect('admin/sales')->with('flash_message', 'Sale updated!');
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
        Sale::destroy($id);

        return redirect('admin/sales')->with('flash_message', 'Sale deleted!');
    }
}
