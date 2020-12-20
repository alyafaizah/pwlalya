<?php

namespace App\Http\Controllers;
use App\Barang;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtbarang=Barang::all();
        return view('body.databarang',compact('dtbarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('body.tambahbarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Barang::create([
            'nama_barang'=>$request->nama_barang,
            'gambar'=>$request->gambar,
            'harga'=>$request->harga,
            'detail'=>$request->detail,
            'deskripsi'=>$request->deskripsi,
        ]);


        return redirect ('databarang');
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
        //
        $brg = Barang::findorfail($id);
       return view('body.editdata',compact('brg'));
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
        //
        $brg = Barang::findorfail($id);
        $brg->update($request->all());
        return redirect('databarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $brg = Barang::findorfail($id);
        $brg->delete();
        return redirect('databarang');
    }
}
