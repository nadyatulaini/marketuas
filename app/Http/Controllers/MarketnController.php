<?php

namespace App\Http\Controllers;

use App\marketn;
use Illuminate\Http\Request;
use marketnadia;

class MarketnController extends Controller
{
    //
    
    public function index()
    {
        //
        return marketn::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $market = new marketn();
        $market ->namaBarang = $request->namaBarang;
        $market ->jenisBarang = $request->jenisBarang;
        $market ->Brand = $request->Brand;
        $market ->Desc_Barang = $request->Desc_Barang;

        $market->save();

        return 'Berhasil Di simpan';
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\marketn  $marketn
     * @return \Illuminate\Http\Response
     */
    public function show(marketn $marketn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\marketn  $marketn
     * @return \Illuminate\Http\Response
     */
    public function edit(marketn $marketn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\marketn  $marketn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $namaBarang = $request->input('namaBarang');
        $jenisBarang = $request->input('jenisBarang');
        $Brand = $request->input('Brand');
        $Desc_Barang = $request->input('Desc_Barang');

        $data = marketn::where('id',$id)->first();
        $data->namaBarang = $namaBarang;
        $data->jenisBarang = $jenisBarang;
        $data->Brand = $Brand;
        $data->Desc_Barang = $Desc_Barang;

        if($data->save()){
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
        }
        else{
            $res['message'] = "Failed!";
            return response($res);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\marketn  $marketn
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $market = marketn::findOrFail($id);
        $market->delete();

        return 'berhasil di hapus';
    }
}
