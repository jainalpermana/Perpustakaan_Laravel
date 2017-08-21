<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ListBuku;
use App\Http\Requests;

class ListBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listbukus = DB::table('listbuku')->paginate(2);
        return view('listbuku.index',compact('listbukus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('listbuku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga_jual' => 'required',
            'harga_dasar' => 'required',

        ]);

        $listbuku = new ListBuku;

        $listbuku ->nama =$request->nama;
        $listbuku ->harga_jual =$request->harga_jual;
        $listbuku ->harga_dasar =$request->harga_dasar;
        
        $listbuku ->save();

        return redirect('listbuku');
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
        
        $listbuku = ListBuku::find($id);

        return view('listbuku.edit')->with('listbuku',$listbuku);
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
        $this->validate($request, [
            'id' => 'required',
            'nama' => 'required',
            'harga_jual' => 'required',
            'harga_dasar' => 'required',

        ]);

        $listbuku = ListBuku::find($id);

        $listbuku ->id =$request->id;
        $listbuku ->nama =$request->nama;
        $listbuku ->harga_jual =$request->harga_jual;
        $listbuku ->harga_dasar =$request->harga_dasar;
        
        $listbuku ->save();

        return redirect('listbuku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $listbuku = Listbuku::find($id);
       $listbuku-> delete();
       return redirect('listbuku');  
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $hasil = ListBuku::where('nama', 'LIKE', '%' . $query . '%')->paginate(1);

        return view('listbuku.result', compact('hasil', 'query'));
    }
}
