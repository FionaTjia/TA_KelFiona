<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PurchaseController extends Controller
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
            $purchase = Purchase::where('id_purchase', 'LIKE', "%$keyword%")
                ->orWhere('jumlah_purchase', 'LIKE', "%$keyword%")
                ->orWhere('harga', 'LIKE', "%$keyword%")
                ->orWhere('id_produk', 'LIKE', "%$keyword%")
                ->orWhere('id_supplier', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $purchase = Purchase::latest()->paginate($perPage);
        }

        return view('admin.purchase.index', compact('purchase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.purchase.create');
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
            'id_purchase' => 'required|min:3|max:11',
            'jumlah_purchase' => 'required|max:100',
            'harga' => 'required|max:100',
            'id_produk' => 'required|min:3|max:11',
            'id_supplier' => 'required|min:3|max:11',
            ]);
        if ($validator->fails()) {
            return redirect('admin/purchase')->withErrors($validator);
        } else {
            $requestData = $request->all();
            
            Purchase::create($requestData);

            return redirect('admin/purchase')->with('flash_message', 'Purchase added!');
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
        $purchase = Purchase::findOrFail($id);

        return view('admin.purchase.show', compact('purchase'));
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
        $purchase = Purchase::findOrFail($id);

        return view('admin.purchase.edit', compact('purchase'));
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
            'id_purchase' => 'required|min:3|max:11',
            'jumlah_purchase' => 'required|max:100',
            'harga' => 'required|max:100',
            'id_produk' => 'required|min:3|max:11',
            'id_supplier' => 'required|min:3|max:11',
            ]);
        if ($validator->fails()) {
            return redirect('admin/purchase')->withErrors($validator);
        } else {
        
            $requestData = $request->all();
            
            $purchase = Purchase::findOrFail($id);
            $purchase->update($requestData);

            return redirect('admin/purchase')->with('flash_message', 'Purchase updated!');
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
        Purchase::destroy($id);

        return redirect('admin/purchase')->with('flash_message', 'Purchase deleted!');
    }
}
