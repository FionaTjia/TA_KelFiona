<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Konsuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KonsumenController extends Controller
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
            $konsumen = Konsuman::where('id_konsumen', 'LIKE', "%$keyword%")
                ->orWhere('nama_konsumen', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $konsumen = Konsuman::latest()->paginate($perPage);
        }

        return view('admin.konsumen.index', compact('konsumen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.konsumen.create');
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
        //validasi
        $validator = Validator::make($request->all(), [
            'id_konsumen' => 'required|min:3|max:11',
            'nama_konsumen' => 'required|max:100',
            'hp_konsumen' => 'required|max:16'
            ]);
        if ($validator->fails()) {
            return redirect('admin/konsumen')->withErrors($validator);
        } else {
        
            $requestData = $request->all();
            
            Konsuman::create($requestData);

            return redirect('admin/konsumen')->with('flash_message', 'Konsuman added!');
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
        $konsuman = Konsuman::findOrFail($id);

        return view('admin.konsumen.show', compact('konsuman'));
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
        $konsuman = Konsuman::findOrFail($id);

        return view('admin.konsumen.edit', compact('konsuman'));
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
            'id_konsumen' => 'required|min:3|max:11',
            'nama_konsumen' => 'required|max:100',
            'hp_konsumen' => 'required|max:16'
            ]);
        if ($validator->fails()) {
            return redirect('admin/konsumen')->withErrors($validator);
        } else {
            $requestData = $request->all();
            
            $konsuman = Konsuman::findOrFail($id);
            $konsuman->update($requestData);

            return redirect('admin/konsumen')->with('flash_message', 'Konsuman updated!');
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
        Konsuman::destroy($id);

        return redirect('admin/konsumen')->with('flash_message', 'Konsuman deleted!');
    }
}
