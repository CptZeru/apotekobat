<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\obat;

class OBATcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruds = obat::all()->toArray();
		
		return view('obat.index', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crud = new obat([
			'nama_obat' => $request->get('obat'),
			'harga' => $request->get('harga'),
			'stok' => $request->get('stok'),
			'expired_date' => $request->get('expdate'),
			'production_date' => $request->get('proddate'),
		]);
		$crud->save();
		return redirect('/obat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud = obat::find($id);
		
		return view('obat.edit', compact('crud','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $crud = obat::find($id);
		$crud->nama_obat = $request->get('obat');
		$crud->harga = $request->get('harga');
		$crud->stok = $request->get('stok');
		$crud->expired_date = $request->get('expdate');
		$crud->production_date = $request->get('proddate');
		$crud->save();
		return redirect('/obat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud = obat::find($id);
		$crud->delete();
		
		return redirect('/obat');
    }
}
