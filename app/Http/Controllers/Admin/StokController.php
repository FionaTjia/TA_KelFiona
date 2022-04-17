<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Stok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StokController extends Controller
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
            $stok = Stok::where('stok_id_produk', 'LIKE', "%$keyword%")
                ->orWhere('stok', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $stok = Stok::latest()->paginate($perPage);
        }

        return view('admin.stok.index', compact('stok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.stok.create');
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
            'stok_id_produk' => 'required|min:3|max:11',
            'stok' => 'required|max:100',
            ]);
        if ($validator->fails()) {
            return redirect('admin/stok')->withErrors($validator);
        } else {
        
            $requestData = $request->all();
            
            Stok::create($requestData);

            return redirect('admin/stok')->with('flash_message', 'Stok added!');
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
        $stok = Stok::findOrFail($id);

        return view('admin.stok.show', compact('stok'));
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
        $stok = Stok::findOrFail($id);

        return view('admin.stok.edit', compact('stok'));
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
            'stok_id_produk' => 'required|min:3|max:11',
            'stok' => 'required|max:100',
            ]);
        if ($validator->fails()) {
            return redirect('admin/stok')->withErrors($validator);
        } else {
            $requestData = $request->all();
            
            $stok = Stok::findOrFail($id);
            $stok->update($requestData);

            return redirect('admin/stok')->with('flash_message', 'Stok updated!');
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
        Stok::destroy($id);

        return redirect('admin/stok')->with('flash_message', 'Stok deleted!');
    }
}
